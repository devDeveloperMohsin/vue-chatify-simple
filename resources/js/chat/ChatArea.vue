<template>
  <div class="w-100">
    <div class="p-3 p-lg-4 border-bottom">
      <div class="row align-items-center">
        <div class="col-sm-4 col-8">
          <div class="media align-items-center">
            <div class="d-block d-lg-none mr-2">
              <a href="javascript: void(0);" class="user-chat-remove text-muted font-size-16 p-2"><i
                  class="ri-arrow-left-s-line"></i></a>
            </div>
            <div class="mr-3">
              <img :src="currentUser.avatar" class="rounded-circle avatar-xs" alt="">
            </div>
            <div class="media-body overflow-hidden">
              <h5 class="font-size-16 mb-0 text-truncate"><a href="#" class="text-reset user-profile-show">{{ currentUser.name }}</a>
              </h5>
            </div>
          </div>
        </div>
        
      </div>
    </div>
    <!-- end chat user head -->

    <!-- start chat conversation -->
    <div class="chat-conversation p-3 p-lg-4" data-simplebar="init"  v-chat-scroll="{ enable: true }">
      <ul class="list-unstyled mb-0">

        <message v-for="(msg,index) in messages" :key="index" v-bind:message="msg" />

        <!-- <li>
          <div class="conversation-list">
            <div class="chat-avatar">
              <img src="/chat_assets/images/users/avatar-4.jpg" alt="">
            </div>

            <div class="user-chat-content">
              <div class="ctext-wrap">
                <div class="ctext-wrap-content">
                  <p class="mb-0">
                    Good morning
                  </p>
                  <p class="chat-time mb-0"><i class="ri-time-line align-middle"></i>
                    <span class="align-middle">10:00</span>
                  </p>
                </div>
                <div class="dropdown align-self-start">
                  <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    <i class="ri-more-2-fill"></i>
                  </a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Copy <i
                        class="ri-file-copy-line float-right text-muted"></i></a>
                    <a class="dropdown-item" href="#">Save <i class="ri-save-line float-right text-muted"></i></a>
                    <a class="dropdown-item" href="#">Forward <i
                        class="ri-chat-forward-line float-right text-muted"></i></a>
                    <a class="dropdown-item" href="#">Delete <i
                        class="ri-delete-bin-line float-right text-muted"></i></a>
                  </div>
                </div>
              </div>
              <div class="conversation-name">Doris Brown</div>
            </div>
          </div>
        </li>

        <li class="right">
          <div class="conversation-list">
            <div class="chat-avatar">
              <img src="/chat_assets/images/users/avatar-1.jpg" alt="">
            </div>

            <div class="user-chat-content">
              <div class="ctext-wrap">
                <div class="ctext-wrap-content">
                  <p class="mb-0">
                    Good morning, How are you? What about our next meeting?
                  </p>
                  <p class="chat-time mb-0"><i class="ri-time-line align-middle"></i>
                    <span class="align-middle">10:02</span>
                  </p>
                </div>

                <div class="dropdown align-self-start">
                  <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    <i class="ri-more-2-fill"></i>
                  </a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Copy <i
                        class="ri-file-copy-line float-right text-muted"></i></a>
                    <a class="dropdown-item" href="#">Save <i class="ri-save-line float-right text-muted"></i></a>
                    <a class="dropdown-item" href="#">Forward <i
                        class="ri-chat-forward-line float-right text-muted"></i></a>
                    <a class="dropdown-item" href="#">Delete <i
                        class="ri-delete-bin-line float-right text-muted"></i></a>
                  </div>
                </div>
              </div>
              <div class="conversation-name">Patricia Smith</div>
            </div>
          </div>
        </li>        

        <li class="right">
          <div class="conversation-list">
            <div class="chat-avatar">
              <img src="/chat_assets/images/users/avatar-1.jpg" alt="">
            </div>

            <div class="user-chat-content">
              <div class="ctext-wrap">

                <div class="ctext-wrap-content">
                  <div class="card p-2 mb-2">
                    <div class="media align-items-center">
                      <div class="avatar-sm mr-3">
                        <div class="avatar-title bg-soft-primary text-primary rounded font-size-20">
                          <i class="ri-file-text-fill"></i>
                        </div>
                      </div>
                      <div class="media-body">
                        <div class="text-left">
                          <h5 class="font-size-14 mb-1">admin_v1.0.zip</h5>
                          <p class="text-muted font-size-13 mb-0">12.5 MB</p>
                        </div>
                      </div>

                      <div class="ml-4">
                        <ul class="list-inline mb-0 font-size-20">
                          <li class="list-inline-item">
                            <a href="#" class="text-muted">
                              <i class="ri-download-2-line"></i>
                            </a>
                          </li>
                          <li class="list-inline-item dropdown">
                            <a class="dropdown-toggle text-muted" href="#" role="button" data-toggle="dropdown"
                              aria-haspopup="true" aria-expanded="false">
                              <i class="ri-more-fill"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                              <a class="dropdown-item" href="#">Share <i
                                  class="ri-share-line float-right text-muted"></i></a>
                              <a class="dropdown-item" href="#">Delete <i
                                  class="ri-delete-bin-line float-right text-muted"></i></a>
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>

                  <p class="chat-time mb-0"><i class="ri-time-line align-middle"></i>
                    <span class="align-middle">10:16</span>
                  </p>
                </div>

                <div class="dropdown align-self-start">
                  <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    <i class="ri-more-2-fill"></i>
                  </a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Copy <i
                        class="ri-file-copy-line float-right text-muted"></i></a>
                    <a class="dropdown-item" href="#">Save <i class="ri-save-line float-right text-muted"></i></a>
                    <a class="dropdown-item" href="#">Forward <i
                        class="ri-chat-forward-line float-right text-muted"></i></a>
                    <a class="dropdown-item" href="#">Delete <i
                        class="ri-delete-bin-line float-right text-muted"></i></a>
                  </div>
                </div>

              </div>

              <div class="conversation-name">Patricia Smith</div>
            </div>

          </div>
        </li> -->
      </ul>
    </div>
    <!-- end chat conversation end -->

    <!-- start chat input section -->
    <div class="p-3 p-lg-4 border-top mb-0">
      <div class="row no-gutters">
        <div class="col">
          <div>
            <input type="text" class="form-control form-control-lg bg-light border-light"
              placeholder="Enter Message..." v-model="message" @keyup.enter="storeMessage">
          </div>
        </div>
        <div class="col-auto">
          <div class="chat-input-links ml-md-2">
            <ul class="list-inline mb-0">
              <!-- <li class="list-inline-item">
                <button type="button" class="btn btn-link text-decoration-none font-size-16 btn-lg waves-effect"
                  data-toggle="tooltip" data-placement="top" title="Emoji">
                  <i class="ri-emotion-happy-line"></i>
                </button>
              </li> -->
              <li class="list-inline-item">
                <label for="attachment" class="btn btn-link text-decoration-none font-size-16 btn-lg waves-effect" data-toggle="tooltip" data-placement="top" title="Attached File">
                  <i class="ri-attachment-line"></i>
                </label>
                <input type="file" class="d-none" id="attachment">
              </li>
              <li class="list-inline-item">
                <button type="submit" class="btn btn-primary font-size-16 btn-lg chat-send waves-effect waves-light" @click="storeMessage">
                  <i class="ri-send-plane-2-fill"></i>
                </button>
              </li>
            </ul>
          </div>

        </div>
      </div>
    </div>
    <!-- end chat input section -->
  </div>
</template>

<script>
import Message from './Message.vue';

export default {
  components: {
    Message
  },
  data(){
		return {
			messages: [],
			message: "",
		};
	},
	computed: {
		currentUser(){
			return this.$store.getters.currentUser;
		}
	},
  watch: {
    currentUser(){
      this.messages = [];
      axios.get('/chat/fetch-messages',{
        params: {
          recipient: this.currentUser.id
        }
      })
      .then((response) => {
        this.messages = response.data.data;
      })
      .catch((error) => {
        console.log(error);
      });
    }
  },
  mounted(){
    axios.get('/chat/fetch-messages',{
        params: {
          recipient: this.currentUser.id
        }
      })
      .then((response) => {
        this.messages = response.data.data;
      })
      .catch((error) => {
        console.log(error);
      });
  },
	methods: {
		storeMessage(){
			let formData = new FormData();
			formData.append('to_user', this.currentUser.id);
			formData.append('message', this.message);

			let attachment = document.querySelector('#attachment');
			if(attachment.files[0]){
				formData.append("attachment", attachment.files[0]);
			}

			axios.post('/chat/save-message', formData, {
				headers: {
					'Content-Type': 'multipart/form-data',
				}
			})
			.then((response) => {
				console.log(response.data);
				if(response.data.response === "success"){
					this.messages.push(response.data.message);
					this.message = "";
				}
			})
			.catch((error) => {
				console.log(error);
			});
		}
	},
}
</script>