<template>
  <div class="layout-wrapper d-lg-flex">

		<!-- start chat-leftsidebar -->
		<recipients></recipients>
		<!-- end chat-leftsidebar -->

		<!-- Start User chat -->
		<div class="user-chat w-100">
			<div class="d-lg-flex" v-if="currentUser">

				<!-- start chat conversation section -->
				<chat-area />
				<!-- end chat conversation section -->

				<!-- start User profile detail sidebar -->
				<current-user />
				<!-- end User profile detail sidebar -->
			</div>

			<div class="d-lg-flex" v-else>
				<div class="blank-chat">
					<h2>Please select Recipient</h2>
					<img src="/chat_assets/images/blank-page.png" alt="blank image">
				</div>
			</div>
		</div>
		<!-- End User chat -->
	</div>
</template>

<script>

import Recipients from './Recipients.vue';
import CurrentUser from './CurrentUser.vue';
import ChatArea from './ChatArea.vue';

export default {
	components: {
		Recipients, CurrentUser, ChatArea
	},
	computed: {
		currentUser(){
			return this.$store.getters.currentUser;
		}
	},
}
</script>