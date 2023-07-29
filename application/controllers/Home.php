<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function error() {
        $this->load->view('header');
        $this->load->view('left_menu');
        $this->load->view('errors/404');
        $this->load->view('footer');
    }

    public function download($file = NULL, $is_downloadable = 0) {
        $dirname = "./download/";
        $this->load->helper('download');
        $this->load->helper('file');
        $file_name = $this->encrypt->decode(base64_decode($file));
        if (!is_null($file) && $file_name !== FALSE) {
            if (is_file($dirname . $file_name) && file_exists($dirname . $file_name)) {
                $file_type = get_mime_by_extension(($dirname . $file_name));
                $file_name = str_replace(',', '_', $file_name);
                header("Content-Type: $file_type");
                header("Content-Disposition: filename=" . substr(strrchr($file_name, '/'), 1));
                $f_data = read_file($dirname . $file_name);
                if ($is_downloadable)
                    force_download($file_name, $f_data);
                else
                    echo $f_data;
            } else {
                $message = "<div style=\"margin: 10px;border: 1px solid #D0D0D0;-webkit-box-shadow: 0 0 8px #D0D0D0;text-align:center;\">"
                        . "<fieldset><h1 style=\"color: #444;background-color: transparent;border-bottom: 1px solid #D0D0D0;"
                        . "font-size: 19px;font-weight: normal;margin: 0 0 14px 0;padding: 14px 15px 10px 15px;\">"
                        . "File is Not Available</h1></fieldset></div>";
                $status_code = 200;
                $heading = "File Not Available";
                show_error($message, $status_code, $heading);
            }
        } else
            $this->error();
    }

    public function index() {
        $this->load->view('homepage');
    }

    public function component() {
        $this->load->view('header');
        $this->load->view('left_menu');
        $this->load->view('component');
        $this->load->view('footer');
    }
	public function about() {
        $this->load->view('header');
        $this->load->view('about');
        $this->load->view('footer');
    }
    public function whatsnew() {
        $this->load->view('header');
        $this->load->view('whatsnew');
        $this->load->view('footer');
    }

}
