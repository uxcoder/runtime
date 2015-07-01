<?php


class DataModel extends AppModel
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getData($userId, $parameterId)
    {
        $stmt = $this->database->prepare('
          SELECT value FROM data
          WHERE user_id = :userId AND parameter_id = :parameterId');
        $stmt->execute([
            'userId' => $userId,
            'parameterId' => $parameterId,
        ]);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function saveData($userId, $parameterId, $value)
    {
        $now = $today = date('Y-m-d H:i:s');
        $stmt = $this->database->prepare('
          INSERT INTO data (user_id, parameter_id, date, value)
          VALUES (:userId, :parameterId, :date, :value)');

        $stmt->execute([
            'userId' => $userId,
            'parameterId' => $parameterId,
            'date' => $now,
            'value' => $value
        ]);
        return true;
    }
}