<?php

class Cms_model extends CI_Model {

    //Insert packages Data
    function insert_leisure_data($link) {
        $data = array(
            'Packages_Name' => $this->input->post('p_name'),
            'Package_Details_titel' => $this->input->post('p_Details'),
            'Package_Entitlement' => $this->input->post('p_Entitlement'),
            'Package_Bokking_Process' => $this->input->post('p_Booking'),
            'Package_Cast' => $this->input->post('p_Cost'),
            'Inclusion' => $this->input->post('p_Inclusion'),
            'Exclusion' => $this->input->post('p_Exclusion'),
            'Location_name' => $this->input->post('L_name'),
            'Online_Charge' => $this->input->post('Online_Charge'),
            'Other_Charge' => $this->input->post('Other_Charge'),
            'Total_nights' => $this->input->post('night'),
            'Packages_image' => $link
        );
        $this->db->insert(' leisure_packages', $data);
    }

    //Get packages Data
    function get_packages_table($country_name = null) {
        //echo $country_name;die;
        $this->db->select('l_id,Packages_Name,Packages_image,Package_Details_titel,Package_Entitlement,Package_Bokking_Process,Package_Cast,Inclusion,Exclusion,Location_name,Online_Charge,Other_Charge,Total_nights');
        $query = $this->db->get_where('leisure_packages', array('Location_name' => $country_name));
        return $query->result_array();
    }

    //Get Menu packages Data
    function get_menu_packages() {
        //echo $country_name;die;
        $this->db->select('l_id,Packages_Name,Packages_image,Package_Details_titel,Package_Entitlement,Package_Bokking_Process,Package_Cast,Inclusion,Exclusion,Location_name,Online_Charge,Other_Charge,Total_nights');
        $query = $this->db->get('leisure_packages');
        return $query->result_array();
    }

    function get_booking_packages($l_id = null) {
        //echo $country_name;die;
        $this->db->select('l_id,Packages_Name,Packages_image,Package_Details_titel,Package_Entitlement,Package_Bokking_Process,Package_Cast,Inclusion,Exclusion,Location_name,Online_Charge,Other_Charge,Total_nights');
        $query = $this->db->get_where('leisure_packages', array('l_id' => $l_id));
        return $query->row_array();
    }

    //Get Insert Home Data
    function insert_home_data($link_home_packages) {
        $data = array(
            'Packages_name' => $this->input->post('p_name'),
            'Country_Name' => $this->input->post('country_name'),
            'City_Name' => $this->input->post('city_name'),
            'Packages_Cost' => $this->input->post('p_cost'),
            'image' => $link_home_packages
        );
        $this->db->insert(' home_packages', $data);
    }

    //Get Home Data
    function get_home_table() {
        $this->db->select("id,Packages_name,Country_name,City_name,Packages_Cost,image");
        $query = $this->db->get('home_packages');
        return $query->result_array();
    }

    //insert slider Data
    function insert_slider_data($link_slider_image) {
        $data = array(
            'image' => $link_slider_image
        );
        $this->db->insert('slider_image', $data);
    }

    //Get slider Data
    function get_slider_table() {
        $this->db->select("id,image");
        $query = $this->db->get('slider_image');
        return $query->result_array();
    }

    function get_view_packages($id = null) {
        //echo $country_name;die;
        $this->db->select('l_id,Packages_Name,Packages_image,Package_Details_titel,Package_Entitlement,Package_Bokking_Process,Package_Cast,Inclusion,Exclusion,Location_name');
        $query = $this->db->get_where('leisure_packages', array('l_id' => $id));
        return $query->row_array();
    }

    function Get_update_Ldata($id) {

        return $this->db->where("l_id", $id)->get("leisure_packages")->row_array($id);
    }

    function update_Ldata($id, $link) {
        $data = array(
            'Packages_Name' => $this->input->post('p_name'),
            'Package_Details_titel' => $this->input->post('p_Details'),
            'Packages_image' => $link
        );

        $this->db->where('l_id', $id);
        //echo $this->db->last_query();    die;
        $this->db->update('leisure_packages', $data);
    }

    function Delete_Ldata($id) {
        $this->db->where('l_id', $id);
        $this->db->delete('leisure_packages');
    }

    function get_view_home($id = null) {
        //echo $country_name;die;
        $this->db->select('id,Packages_Name,image,Country_Name,City_Name,Packages_Cost');
        $query = $this->db->get_where('home_packages', array('id' => $id));
        return $query->row_array();
    }

    function Get_update_Hdata($id) {

        return $this->db->where("id", $id)->get("home_packages")->row_array($id);
    }

    function update_Hdata($id, $link_home_packages) {
        $data = array(
            'Packages_name' => $this->input->post('p_name'),
            'Country_Name' => $this->input->post('country_name'),
            'City_Name' => $this->input->post('city_name'),
            'Packages_Cost' => $this->input->post('p_Cost'),
            'image' => $link_home_packages
        );

        $this->db->where('id', $id);
        //echo $this->db->last_query();    die;
        $this->db->update('home_packages', $data);
    }

    function Delete_Hdata($id) {
        $this->db->where('id', $id);
        $this->db->delete('home_packages');
    }

    function Get_update_Sdata($id) {

        return $this->db->where("id", $id)->get("slider_image")->row_array($id);
    }

    function get_view_slider($id = null) {
        //echo $country_name;die;
        $this->db->select('id,image');
        $query = $this->db->get_where('slider_image', array('id' => $id));
        return $query->row_array();
    }

    function update_Sdata($id, $link_slider_image) {
        $data = array(
            'image' => $link_slider_image
        );

        $this->db->where('id', $id);
        //echo $this->db->last_query();    die;
        $this->db->update('slider_image', $data);
    }

    function Delete_Sdata($id) {
        $this->db->where('id', $id);
        $this->db->delete('slider_image');
    }

    function insert_location_data() {
        $data = array(
            'L_Name' => $this->input->post('l_name')
        );
        $this->db->insert('location_name', $data);
    }

    function get_Location() {
        $this->db->select("id,L_Name");
        $query = $this->db->get('location_name');
        return $query->result_array();
    }

    function Get_update_location($id) {

        return $this->db->where("id", $id)->get("location_name")->row_array($id);
    }

    function update_L_data($id) {
        $data = array(
            'L_Name' => $this->input->post('L_name'),
        );

        $this->db->where('id', $id);
        //echo $this->db->last_query();    die;
        $this->db->update('location_name', $data);
    }

    function Delete_Location($id) {
        $this->db->where('id', $id);
        $this->db->delete('location_name');
    }

    function insert_contact() {
        $data = array(
            'Name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'subject' => $this->input->post('subject'),
            'message' => $this->input->post('message')
        );
        $this->db->insert('Contact_us', $data);
    }

    function get_contact_details() {
        $this->db->select("c_id,Name,email,subject,message");
        $query = $this->db->get('Contact_us');
        return $query->result_array();
    }

    function get_view_contact($id) {
        return $this->db->where("c_id", $id)->get("Contact_us")->row_array($id);
    }

    function Delete_contact_data($id) {
        $this->db->where('c_id', $id);
        $this->db->delete('Contact_us');
    }

    function insert_Discover_data() {
        $data = array(
            'Name' => $this->input->post('d_name')
        );
        $this->db->insert('Discover', $data);
    }

    function get_Discover() {
        $this->db->select("d_id,Name");
        $query = $this->db->get('Discover');
        return $query->result_array();
    }

    function Get_update_Discover($id) {

        return $this->db->where("d_id", $id)->get("discover")->row_array($id);
    }

    function update_Discover_data($id) {
        $data = array(
            'Name' => $this->input->post('d_name')
        );
        $this->db->where('d_id', $id);
        //echo $this->db->last_query();    die;
        $this->db->update('Discover', $data);
    }

    function delete_discover($id) {
        $this->db->where('d_id', $id);
        $this->db->delete('Discover');
    }

    function insert_news($link) {
        $data = array(
            'title' => $this->input->post('titel'),
            'content' => $this->input->post('content'),
            'date' => $this->input->post('date'),
            'image' => $link
        );
        $this->db->insert('travel_news', $data);
    }

    function get_news() {
        $this->db->select("	t_id,title,content,date,image");
        $query = $this->db->get('travel_news');
        return $query->result_array();
    }

    function update_tnews($id) {

        return $this->db->where("t_id", $id)->get("travel_news")->row_array($id);
    }

    function update_tnews_data($id, $link) {
        $data = array(
            'title' => $this->input->post('titel'),
            'content' => $this->input->post('content'),
            'date' => $this->input->post('date'),
            'image' => $link
        );
        $this->db->where('t_id', $id);
        //echo $this->db->last_query();    die;

        $this->db->update('travel_news', $data);
    }

    function delete_tnews($id) {
        $this->db->where('t_id', $id);
        $this->db->delete('travel_news');
    }

    function insert_footer_about() {
        $data = array(
            'content' => $this->input->post('content'),
            'phone' => $this->input->post('phone'),
            'email' => $this->input->post('email')
        );
        $this->db->insert('footer_about', $data);
    }

    function get_Footer_About() {
        $this->db->select("abt_id,content,phone,email");
        $query = $this->db->get('footer_about');
        return $query->row_array();
    }

    function update_footer_about($id) {

        return $this->db->where("abt_id", $id)->get("footer_about")->row_array($id);
    }

    function update_footer_data($id) {
        $data = array(
            'content' => $this->input->post('content'),
            'phone' => $this->input->post('phone'),
            'email' => $this->input->post('email')
        );
        $this->db->where('abt_id', $id);
        //echo $this->db->last_query();    die;

        $this->db->update('footer_about', $data);
    }

    function delete_footer_about($id) {
        $this->db->where('abt_id', $id);
        $this->db->delete('footer_about');
    }

    function insert_contact_data() {
        $data = array(
            'email' => $this->input->post('email'),
            'phone' => $this->input->post('phone'),
            'address' => $this->input->post('address')
        );
        //echo "<pre>";print_r($data);die;
        $this->db->insert('add_contact', $data);
    }

    function get_contact_data() {
        $this->db->select("a_id,phone,email,address");
        $query = $this->db->get('add_contact');
        return $query->row_array();
    }

    function update_contact_details($id) {
        $data = array(
            'phone' => $this->input->post('phone'),
            'email' => $this->input->post('email'),
            'address' => $this->input->post('address')
        );
        $this->db->where('a_id', $id);
        $this->db->update('add_contact', $data);
    }

    function Delete_Contact_details($id) {
        $this->db->where('a_id', $id);
        $this->db->delete('add_contact');
    }

    function insert_about_data() {
        $data = array(
            'blue_sky' => $this->input->post('Blue_Sky'),
            'mission' => $this->input->post('Mission')
        );
        //echo "<pre>";print_r($data);die;
        $this->db->insert('about_bluesky', $data);
    }

    function get_About() {
        $this->db->select("about_id,blue_sky,mission");
        $query = $this->db->get('about_bluesky');
        return $query->row_array();
    }

    function about_data() {
        $this->db->select("about_id,blue_sky,mission");
        $query = $this->db->get('about_bluesky');
        return $query->row_array();
    }

    function Update_about_details($id) {
        $data = array(
            'blue_sky' => $this->input->post('Blue_Sky'),
            'mission' => $this->input->post('Mission')
        );
        $this->db->where('about_id', $id);
        $this->db->update('about_bluesky', $data);
    }

    function Delete_About_details($id) {
        $this->db->where('about_id', $id);
        $this->db->delete('about_bluesky');
    }

    function insert_booking_user() {
        $data = array(
            'first_name' => $this->input->post('firstname'),
            'last_name' => $this->input->post('lastname'),
            'email' => $this->input->post('email'),
            'phone' => $this->input->post('phone'),
            'address' => $this->input->post('address'),
            'night' => $this->input->post('night'),
            'Price' => $this->input->post('amount'),
            'Packages' => $this->input->post('productinfo')
        );
        $this->db->insert('booking', $data);
    }

    function booking_details() {
        $data = array(
            $this->input->post('firstname'),
            $this->input->post('lastname'),
            $this->input->post('email'),
            $this->input->post('phone'),
            $this->input->post('address'),
            $this->input->post('night'),
            $this->input->post('amount'),
            $this->input->post('productinfo'),
        );
    }

    function insert_subscribe() {
        $data = array(
            'email' => $this->input->post('email'),
        );
        $this->db->insert('subscribe', $data);
    }

    public function user_data($id) {
        $sql = "Select * from login where u_id=$id";
        $query = $this->db->query($sql);
        return $query->row_array();
    }

    public function add_guest($data) {
        return $this->db->insert('guest', $data);
    }

    function insert_gst_details() {
        $random = rand(0000, 9999);
        $data = array(
            'fname' => $this->input->post('firstname'),
            'lname' => $this->input->post('lastname'),
            'email' => $this->input->post('email'),
            'address' => $this->input->post('address'),
            'phone' => $this->input->post('phone'),
            'ran_pass' => $random
        );
        $this->db->insert('guest_login', $data);
        $guest_id = $this->db->insert_id();
        $this->session->set_userdata('guest_id', $guest_id);
    }

    function guest_detail($id) {
        $sql = "select * from guest_login 
			where  id_gstlog=$id";
        $query = $this->db->query($sql);
        return $query->row_array();
    }

    function guest_booking_user_detail($id, $user_type) {
        $sql = "select count(g.id)as countt,g.random  from guest g
                where g.user_id=$id and g.user_type='$user_type' and g.status='Active'";
        $query = $this->db->query($sql);
        return $query->row_array();
    }

    function booked($data) {
        return $this->db->insert('booking', $data);
    }

    function status_chnage_guest($id, $data) {
        $this->db->where(array('user_id' => $id));
        return $this->db->update('guest', $data);
    }

    function booking_data($offset, $limit) {
        $this->db->order_by("book_id", "desc");
        //$this->db->group_by("email");
        $query = $this->db->get("booking", $offset, $limit);

        return $query->result();
    }

    function booking_user_view($u_id, $user_type, $random) {
        $sql = "select g.first_name,g.random,g.id,g.last_name,g.created,g.night,g.package,g.price,g.prefix,g.dob from guest g
                where g.user_id=$u_id and g.user_type='$user_type' and g.random=$random order by id desc";

        $query = $this->db->query($sql);
        return $query->result();
    }

    function guest_login2($email) {
        $sql = "select * from guest_login gl
                where gl.email='$email'";

        $query = $this->db->query($sql);
        return $query->row_array();
    }

    function user_login2($email) {
        $sql = "select * from login l
                where l.email='$email'";

        $query = $this->db->query($sql);
        return $query->row_array();
    }

    function booking_user_view2($u_id, $user_type) {
        $sql = "select l.u_id,b.Packages from login l
    inner join booking b
    on l.u_id=b.user_id
    where b.user_id=$u_id and l.user_type='$user_type'
        ";
        $query = $this->db->query($sql);
        print_r($this->db->last_query());
        die;

        return $query->result();
    }

    function Delete_Subscription_data($id) {
        $this->db->where('subscribe_id', $id);
        $this->db->delete('subscribe');
    }

    function register_data($offset, $limit) {
        $query = $this->db->get('login', $offset, $limit);
        return $query->result_array();
    }

    function get_view_user($id) {
        return $this->db->where("u_id", $id)->get("login")->row_array();
    }

    function delete_register_data($id) {
        $this->db->where('u_id', $id);
        $this->db->delete('login');
    }

    function delete_active($id, $user_type) {
        $this->db->where(array('status' => 'active', 'user_id' => $id, 'user_type' => $user_type));
        return $this->db->delete('guest');
    }

    function User_booking($id) {
        $sql = "select * from booking b
                where b.user_id='$id'";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

}
