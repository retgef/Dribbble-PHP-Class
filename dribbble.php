<?php
	class Dribbble{		
		private function get($pathname) {
			$curl = curl_init("http://api.dribbble.com/" . $pathname);
			curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
			$response = curl_exec($curl);
			curl_close($curl);
			return $response;
		}
		public function get_info($username){
			return get("players/" . $username);
		}
		public function get_shot($id){
			return get("shots/" . $id);
		}
		public function get_rebound($id){
			return get("shots/" . $id . "/rebounds");
		}
		public function get_comment($id){
			return get("shots/" . $id . "/comments");
		}
		public function get_list($list){
			return get("shots/" . $list );
		}
		public function get_shots($username){
			return get("players/" . $username . "/shots/");
		}
		public function get_shots_following($username){
			return get("players/" . $username . "/shots/following");
		}
		public function get_id_followers($username){
			return get("players/" . $username . "/followers");
		}
		public function get_id_following($username){
			return get("players/" . $username . "/following");
		}
		public function get_id_draftees($username){
			return get("players/" . $username . "/draftees");
		}
		public function get_id_likes($username){
			return get("players/" . $username . "/shots/likes");
		}
	}
?>