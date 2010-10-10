<?php
	class Dribbble{
		public function get_info($username){
			$curl = curl_init('http://api.dribbble.com/players/'.$username);
			curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
			$response = curl_exec($curl);
			curl_close($curl);
			return $response;
		}
		public function get_shot($id){
			$curl = curl_init('http://api.dribbble.com/shots/'.$id);
			curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
			$response = curl_exec($curl);
			curl_close($curl);
			return $response;
		}
		public function get_rebound($id){
			$curl = curl_init('http://api.dribbble.com/shots/'.$id.'/rebounds');
			curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
			$response = curl_exec($curl);
			curl_close($curl);
			return $response;
		}
		public function get_comment($id){
			$curl = curl_init('http://api.dribbble.com/shots/'.$id.'/comments');
			curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
			$response = curl_exec($curl);
			curl_close($curl);
			return $response;
		}
		public function get_list($list){
			$curl = curl_init('http://api.dribbble.com/shots/'.$list);
			curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
			$response = curl_exec($curl);
			curl_close($curl);
			return $response;
		}
		public function get_shots($username){
			$curl = curl_init('http://api.dribbble.com/players/'.$username.'/shots/');
			curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
			$response = curl_exec($curl);
			curl_close($curl);
			return $response;
		}
		public function get_shots_following($username){
			$curl = curl_init('http://api.dribbble.com/players/'.$username.'/shots/following');
			curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
			$response = curl_exec($curl);
			curl_close($curl);
			return $response;
		}
		public function get_id_followers($username){
			$curl = curl_init('http://api.dribbble.com/players/'.$username.'/followers');
			curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
			$response = curl_exec($curl);
			curl_close($curl);
			return $response;
		}
		public function get_id_following($username){
			$curl = curl_init('http://api.dribbble.com/players/'.$username.'/following');
			curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
			$response = curl_exec($curl);
			curl_close($curl);
			return $response;
		}
		public function get_id_draftees($username){
			$curl = curl_init('http://api.dribbble.com/players/'.$username.'/draftees');
			curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
			$response = curl_exec($curl);
			curl_close($curl);
			return $response;
		}
		public function get_id_likes($username){
			$curl = curl_init('http://api.dribbble.com/players/'.$username.'/shots/likes');
			curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
			$response = curl_exec($curl);
			curl_close($curl);
			return $response;
		}
	}
?>