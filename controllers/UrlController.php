<?php

class UrlController extends Controller {
    public function __construct() {
        require_once MODEL_PATH . 'UrlModel.php';
        $this->model = new UrlModel();
    }

    private function short($url) {
        return DOMAIN . mb_substr(md5($url), 0, 5);
    }

    public function create() {
        $minutes_to_add = 3;
        $url = $_GET["url"];
        if (filter_var($url, FILTER_VALIDATE_URL)) {
            $short = $this->short($url);
            $resp = $this->model->get_url($short);
            $row = $resp->fetch_array();
            if($row[0] === null) {
                $date = new DateTime("now", new DateTimeZone("Asia/Yekaterinburg"));
                $date->add(new DateInterval('PT' . $minutes_to_add . 'M'));
                $date = $date->format('Y-m-d H:i:s');
                $this->model->create_url($url, $short, $date);
                echo $short;
            }
            elseif ($row["url"] === $url) {
                echo $short;
            }
            else
                echo "Ошибка: коллизия или ошибка в БД.";
        }
        else {
            echo "Ошибка: некорректный URL.";
        }
    }

    public function redirect() {
        $short = DOMAIN . substr($_SERVER['REQUEST_URI'], 1);
        $resp = $this->model->get_url($short);
        $url = $resp->fetch_array()["url"];
        if($url !== null)
            header("Location: " . $url);
        else
            header("Location: " . DOMAIN);
    }
}
