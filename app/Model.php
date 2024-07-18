<?php
namespace App;


class Model
{
    private static $db;

    public static function Init()
    {
        $uri = 'mongodb://localhost:27017';
        $client = new \MongoDB\Client($uri);
        self::$db = $client->phphomework;
        self::$db->createCollection('Futárok');
    }

    public static function InsertContact($courier)
    {
        if ($courier) {
            $collection = self::$db->Futárok;
            return $collection->insertOne($courier);
        }
    }

    public static function GetContacts($searchQuery = '')
    {
        $collection = self::$db->Futárok;
        $filter = [];

        if (!empty($searchQuery)) {
            $filter = ['name' => ['$regex' => $searchQuery, '$options' => 'i']];
        }

        $list = $collection->find($filter);
        return $list->toArray();
    }

    public static function GetContactById($id)
    {
        $collection = self::$db->Futárok;
        $item = $collection->findOne(self::CreateFilterById($id));
        return $item;
    }

    public static function UpdateContact($id, $data)
    {
        $collection = self::$db->Futárok;
        return $collection->updateOne(self::CreateFilterById($id), ['$set' => $data]);
    }

    public static function DeleteContact($id)
    {
        $collection = self::$db->Futárok;
        return $collection->deleteOne(self::CreateFilterById($id));
    }

    private static function CreateFilterById($id)
    {
        if (!($id instanceof \MongoDB\BSON\ObjectId)) {
            $id = new \MongoDB\BSON\ObjectId($id);
        }
        return ['_id' => $id];
    }
}

 