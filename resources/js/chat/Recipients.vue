<template>
  <div class="chat-leftsidebar mr-lg-1">

    <div class="tab-content">
      <!-- Start chats tab-pane -->
      <div class="tab-pane fade show active" id="pills-chat" role="tabpanel" aria-labelledby="pills-chat-tab">
        <!-- Start chats content -->
        <div>
          <div class="px-4 pt-4">
            <h4 class="mb-4">Chats</h4>
            <div class="search-box chat-search-box">
              <div class="input-group mb-3 bg-light  input-group-lg rounded-lg">
                <div class="input-group-prepend">
                  <button class="btn btn-link text-muted pr-1 text-decoration-none" type="button">
                    <i class="ri-search-line search-icon font-size-18"></i>
                  </button>
                </div>
                <input type="text" class="form-control bg-light" placeholder="Search users" v-model="recipientFilter" @keyup="searchRecipients">
              </div>
            </div> <!-- Search Box-->
          </div> <!-- .p-4 -->

          <!-- Start chat-message-list -->
          <div class="px-2">

            <div class="chat-message-list" data-simplebar>

              <ul class="list-unstyled chat-list chat-user-list">
                <li v-for="(recipient, index) in filteredRecipients" :key="index">
                  <a href="#" @click.prevent="setCurrentUser(recipient)">
                    <div class="media">

                      <div class="chat-user-img online align-self-center mr-3">
                        <img :src="recipient.avatar" class="rounded-circle avatar-xs" :alt="recipient.name+' img'">
                        <span class="user-status"></span>
                      </div>

                      <div class="media-body overflow-hidden">
                        <h5 class="text-truncate font-size-15 mb-1">{{ recipient.name }}</h5>
                        <!-- <p class="chat-user-message text-truncate mb-0">Hey! there I'm
                          available</p> -->
                      </div>
                      <!-- <div class="font-size-11">05 min</div> -->
                    </div>
                  </a>
                </li>

                <!-- <li class="active">
                  <a href="#">
                    <div class="media">
                      <div class="chat-user-img online align-self-center mr-3">
                        <img src="/chat_assets/images/users/avatar-4.jpg" class="rounded-circle avatar-xs" alt="">
                        <span class="user-status"></span>
                      </div>
                      <div class="media-body overflow-hidden">
                        <h5 class="text-truncate font-size-15 mb-1">Doris Brown</h5>
                        <p class="chat-user-message text-truncate mb-0">Nice to meet you</p>
                      </div>
                      <div class="font-size-11">10:12 AM</div>

                    </div>
                  </a>
                </li> -->

              </ul>
            </div>

          </div>
          <!-- End chat-message-list -->
        </div>
        <!-- Start chats content -->
      </div>
      <!-- End chats tab-pane -->
    </div>
    <!-- end tab content -->

  </div>
</template>

<script>
export default {
  data(){
    return {
      recipients : [],
      recipientFilter : "",
      filteredRecipients: [],
    }
  },
  mounted(){
    axios.get('/chat/fetch-recipients')
      .then((response) => {
        this.recipients = response.data.data;
        this.filteredRecipients = response.data.data;
      })
      .catch((error) => {
        console.log(error);
      });
  },
  methods: {
    // Search Recipients
    searchRecipients(){
      if(this.recipientFilter){
        this.filteredRecipients = this.recipients.filter((item)=>{
          // You can use the includes() function of the array to search any position in a sentence or phrase.
          return this.recipientFilter.toLowerCase().split(' ').every(v => item.name.toLowerCase().includes(v));
      })
      }else{
        this.filteredRecipients =  this.recipients;
      }
    },
    // End Search Recipients

    // Set Current User
    setCurrentUser(user){
      this.$store.commit('setCurrentUser',user);
    },
    // End Set Current User
  }
}
</script>