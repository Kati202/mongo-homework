<?php 
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once 'vendor/autoload.php';

use App\View\ViewsView;
use App\Model;
use App\Request;

Model::Init();
ViewsView::Begin();


ViewsView::Search();

//Couriors List
$detailsId = Request::ContactDetailsRequest();
if($detailsId)
{
    $courior = Model::GetContactById($detailsId);
    \App\View\CouriersSearchResult::SearchResult($courior);
}

// Contact creation
if (Request::NewContactSubmitted()) {
    $courior = Request::GetContactPostData();
    Model::InsertContact($courior);

    
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}


// Contact removal
$delId = Request::ContactRemovingRequest();
if ($delId) {
    Model::DeleteContact($delId);

    // Redirect to avoid form resubmission on refresh
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}

App\View\CouriersView::Show();

// List couriors
$couriers = Model::GetContacts();
App\View\CouriersPluss::ShowList($couriers);

//List Search
$searchQuery = $_GET['search'] ?? '';
if (!empty($searchQuery)) {
    $searchResults = Model::GetContacts($searchQuery);
    App\View\CouriersSearchResult::SearchResult($searchResults);
}

ViewsView::End();
?>

