<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Code extends CI_Controller {

    public function index() {
        $this->load->view('code/header');
        $this->load->view('code/typography/typography');
		$this->load->view('code/footer');
    }

    public function text_decoration() {
        $this->load->view('code/header');
        $this->load->view('code/text_decoration/text_decoration');
		$this->load->view('code/footer');
    }

    public function text_color() {
		$data['page_title'] = 'Text Color | Wellcome CSS Framework';
        $data['meta_description'] = 'Wellcome CSS Framework is a Responsive Lightweight Front-end Framework, Fast and Powerful Web Interface. 
HTML,CSS and JQUERY Components is Simple to use, easy to Biuld your Website.';
        $data['meta_keywords'] = 'html,css,html5,css3,jquery,wellcome css,css framework,framework,responsive,front-end,web interface,web design,ui,design,CDN, Archive List, Typography, Icons Font (wellcomecss), Text Decoration / Font Decoration, Text Color, Text Align, Background Color, Grid System, Nav Bar, Button, Box, Title Box, Panel, Message Box, Table Structure, Circle /Radius, Image Responsive, Image Effects, Hover Effects, Align, Progress Bar, Breadcrumb, Pagination, Badges, Tag, List, Form, Help Class, Templates, JS Properties, Slider, Closeable Box, Modal, Accordion, Tab, Dropdown, Mobile Menu, Filter';
		
        $this->load->view('code/header', $data);
        $this->load->view('code/text_color/text_color', $data);
		$this->load->view('code/footer', $data);
    }

    public function text_align() {
        $this->load->view('code/header');
        $this->load->view('code/text_align/text_align');
		$this->load->view('code/footer');
    }

    public function background_color() {
        $this->load->view('code/header');
        $this->load->view('code/background_color/background_color');
		$this->load->view('code/footer');
    }

    public function grid_system() {
        $this->load->view('code/header');
        $this->load->view('code/grid_system/grid_system');
		$this->load->view('code/footer');
    }

    public function navbar() {
        $this->load->view('code/header');
        $this->load->view('code/navbar/navbar');
		$this->load->view('code/footer');
    }

    public function button() {
        $this->load->view('code/header');
        $this->load->view('code/button/button');
		$this->load->view('code/footer');
    }

    public function box() {
        $this->load->view('code/header');
        $this->load->view('code/box/box');
		$this->load->view('code/footer');
    }

    public function title_box() {
        $this->load->view('code/header');
        $this->load->view('code/title_box/title_box');
        $this->load->view('code/footer');
    }

    public function panel() {
        $this->load->view('code/header');
        $this->load->view('code/panel/panel');
		$this->load->view('code/footer');
    }

    public function message_box() {
        $this->load->view('code/header');
        $this->load->view('code/message_box/message_box');
		$this->load->view('code/footer');
    }

    public function table() {
        $this->load->view('code/header');
        $this->load->view('code/table/table');
		$this->load->view('code/footer');
    }

    public function radius_genatater() {
        $this->load->view('code/header');
        $this->load->view('code/radius_genatater');
    }    
	
	public function gradient_generator() {
        $this->load->view('code/header');
        $this->load->view('code/gradient-generator');
    }

    public function image_effects() {
        $this->load->view('code/header');
        $this->load->view('code/image_effects');
    }

	public function hover_effects() {
        $this->load->view('code/header');
        $this->load->view('code/hover_effects/hover_effects');
        $this->load->view('code/footer');
    }
    
    public function progress_bar() {
        $this->load->view('code/header');
        $this->load->view('code/progress_bar/progress_bar');
		$this->load->view('code/footer');
    }

    public function breadcrumb() {
        $this->load->view('code/header');
        $this->load->view('code/breadcrumb/breadcrumb');
        $this->load->view('code/footer');
    }

    public function pagination() {
        $this->load->view('code/header');
        $this->load->view('code/pagination/pagination');
        $this->load->view('code/footer');
    }

    public function badges() {
        $this->load->view('code/header');
        $this->load->view('code/badges/badges');
        $this->load->view('code/footer');
    }

    public function tag() {
        $this->load->view('code/header');
        $this->load->view('code/tag/tag');
        $this->load->view('code/footer');
    }

    public function list_() {
        $this->load->view('code/header');
        $this->load->view('code/list/list');
        $this->load->view('code/footer');
    }

    public function form() {
        $this->load->view('code/header');
        $this->load->view('code/form/form');
        $this->load->view('code/footer');
    }

    public function flexbox() {
        $this->load->view('code/header');
        $this->load->view('code/flexbox/flexbox');
        $this->load->view('code/footer');
    }

    public function slider() {
        $this->load->view('code/header');
        $this->load->view('code/slider/slider');
        $this->load->view('code/footer');
    }

    public function photogallery() {
        $this->load->view('code/header');
        $this->load->view('code/photogallery/photogallery');
        $this->load->view('code/footer');
    }

    public function offset_fix() {
        $this->load->view('code/header');
        $this->load->view('code/offset_fix/offset_fix');
        $this->load->view('code/footer');
    }

    public function closeable_box() {
        $this->load->view('code/header');
        $this->load->view('code/closeable_box/closeable_box');
		$this->load->view('code/footer');
    }

    public function modal() {
        $this->load->view('code/header');
        $this->load->view('code/modal/modal');
        $this->load->view('code/footer');
    }

    public function accordion() {
        $this->load->view('code/header');
        $this->load->view('code/accordion/accordion');
        $this->load->view('code/footer');
    }

    public function tab() {
        $this->load->view('code/header');
        $this->load->view('code/tab/tab');
        $this->load->view('code/footer');
    }

    public function dropdown() {
        $this->load->view('code/header');
        $this->load->view('code/dropdown/dropdown');
        $this->load->view('code/footer');
    }

    public function mobile_menu_left_overlay() {
        $this->load->view('code/header');
        $this->load->view('code/mobile_menu/mobile_menu_left_overlay');
        $this->load->view('code/footer');
    }

    public function mobile_menu_right_overlay() {
        $this->load->view('code/header');
        $this->load->view('code/mobile_menu/mobile_menu_right_overlay');
        $this->load->view('code/footer');
    }

    public function filter() {
        $this->load->view('code/header');
        $this->load->view('code/filter/filter');
		$this->load->view('code/footer');
    } 
    	
	public function mp3_player() {
        $this->load->view('code/mp3_player');
    }

	public function restest() {
        $this->load->view('code/restest');
    }
	
    //Tempalte
    public function templates01() {
        $this->load->view('code/templates/01/index');
    }

    public function templates02() {
        $this->load->view('code/templates/02/index');
    }

    public function templates03() {
        $this->load->view('code/templates/03/index');
    }

}
