<template>
  <li :class="{right: msgDirection}">
    <div class="conversation-list">
      <div class="chat-avatar">
        <img :src="messageUser.avatar" alt="">
      </div>

      <div class="user-chat-content">
        <div class="ctext-wrap">
          <div class="ctext-wrap-content">
            <p class="mb-0">
              {{ message.message }}
            </p>
            <p class="chat-time mb-0"><i class="ri-time-line align-middle"></i>
              <span class="align-middle">{{ message.created_at }}</span>
            </p>
          </div>
          
        </div>
        <div class="conversation-name">{{ messageUser.name }}</div>
      </div>
    </div>
  </li>
</template>

<script>
export default {
  props: ['message'],
  computed: {
    currentUser(){
			return this.$store.getters.currentUser;
		},
    msgDirection(){
      if(this.message.from_user.id !== this.currentUser.id){
        return 'right';
      }
      
      return '';
    },
    messageUser(){
      return this.message.from_user
    }
  }
}
</script>