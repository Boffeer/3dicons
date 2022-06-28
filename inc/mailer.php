<?php

if (wp_doing_ajax()) {
	add_action('wp_ajax_nopriv_send_contact', 'send_contact_form');
	add_action('wp_ajax_send_contact', 'send_contact_form');
}
function send_contact_form()
{

	$send_to =  i3d_explode_textarea(carbon_get_theme_option('lead_emails'));

	$name = $_POST['name'];
	$email = $_POST['email'];

	$message_body =
		"Name: $name<br/><br/>" .
		"Email: $email<br/><br/>";

	$post_data = $_POST;
	foreach ($post_data as $key => $post) {
		if ($post != $_POST['formname'] && $post != $_POST['name'] && $post != $_POST['tel'] && $post != $_POST['action']) {
			$message_body .= $key . ": $post<br/><br/>";
		}
	}

	$email_to = 'boffeechane@gmail.com';
	$email_from = 'info@free3dicon.com';
	$email_subject = "New Lead free3dicon.com";

	// если форма без ошибок

	$headers = "MIME-Version: 1.0\r\n";
	$headers .= "Content-type: text/html; charset=utf-8\r\n"; // кодировка письма
	$headers .= "From: <" . $email_from . ">\r\n"; // от кого письмо

	// echo json_encode(array('status' => 'success', 'body' => $message_body));
	foreach ($send_to as $email_to) {
		mail($email_to, $email_subject, $message_body, $headers);
	}
	echo 'success';

	wp_die();
}
