<template>
   <div class="library mt-4">
      <div class="digital-library">
         <div class="card">
            <div class="card-body">
               <div class="row library-search">
                  <div class="col-md-12">
                       <div class="input-group">
                      <input type="text" class="form-control" placeholder="Search in Libraries" aria-label="Recipient's username">
                      <div class="input-group-append">
                        <button class="btn btn-sm btn-primary" type="button">{{ $trans("data.Search") }}</button>
                      </div>
                    </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-6 col-lg-3">
                     <div class="flip-card">
                        <div class="flip-card-inner">
                           <div class="flip-card-front card-inverse-light">
                              <div class="library-image">
                                  <img :src="`${storage_path}/library_video.png`" alt="" class="lib-img"></div>
                                  <div class="library-info">
                                      <h5>{{ $trans("data.Video Library") }}</h5>
                                      <h6>{{ $trans("data.Number of Files") }}: <span class="library-number">0</span> </h6>
                              </div>
                           </div>
                           <div class="flip-card-back card-inverse-dark">
                              <div class="back-up">
                                   <h3>{{ $trans("data.Video Library") }}</h3>
                                   <h4>{{ $trans("data.Number of Files") }}: <span class="library-number">0</span></h4>
                              </div>
                              <div class="back-down">
                                  <button class="btn btn-dark btn-block">{{ $trans("data.View Library") }}</button>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6 col-lg-3">
                     <div class="flip-card">
                        <div class="flip-card-inner">
                           <div class="flip-card-front card-inverse-light">
                              <div class="library-image">
                                  <img :src="`${storage_path}/library_image.png`" alt="" class="lib-img"></div>
                                  <div class="library-info">
                                      <h5>{{ $trans("data.Image Library") }}</h5>
                                      <h6>{{ $trans("data.Number of Files") }}: <span class="library-number">0</span> </h6>
                              </div>
                           </div>
                           <div class="flip-card-back card-inverse-dark">
                              <div class="back-up">
                                   <h3>{{ $trans("data.Image Library") }}</h3>
                                   <h4>{{ $trans("data.Number of Files") }}: <span class="library-number">0</span></h4>
                              </div>
                              <div class="back-down">
                                  <button class="btn btn-dark btn-block">{{ $trans("data.View Library") }}</button>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6 col-lg-3">
                     <div class="flip-card">
                        <div class="flip-card-inner">
                           <div class="flip-card-front card-inverse-light">
                              <div class="library-image">
                                  <img :src="`${storage_path}/library_Audio.png`" alt="" class="lib-img"></div>
                                  <div class="library-info">
                                      <h5>{{ $trans("data.Audio Library") }}</h5>
                                      <h6>{{ $trans("data.Number of Files") }}: <span class="library-number">0</span> </h6>
                              </div>
                           </div>
                           <div class="flip-card-back card-inverse-dark">
                              <div class="back-up">
                                   <h3>{{ $trans("data.Audio Library") }}</h3>
                                   <h4>{{ $trans("data.Number of Files") }}: <span class="library-number">0</span></h4>
                              </div>
                              <div class="back-down">
                                  <button class="btn btn-dark btn-block">{{ $trans("data.View Library") }}</button>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6 col-lg-3">
                     <div class="flip-card">
                        <div class="flip-card-inner">
                           <div class="flip-card-front card-inverse-light">
                              <div class="library-image">
                                  <img :src="`${storage_path}/library_Presentation.png`" alt="" class="lib-img"></div>
                                  <div class="library-info">
                                      <h5>{{ $trans("data.Presentation Library") }}</h5>
                                      <h6>{{ $trans("data.Number of Files") }}: <span class="library-number">0</span> </h6>
                              </div>
                           </div>
                           <div class="flip-card-back card-inverse-dark">
                              <div class="back-up">
                                   <h3>{{ $trans("data.Presentation Library") }}</h3>
                                   <h4>{{ $trans("data.Number of Files") }}: <span class="library-number">0</span></h4>
                              </div>
                              <div class="back-down">
                                  <button class="btn btn-dark btn-block">{{ $trans("data.View Library") }}</button>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6 col-lg-3">
                     <div class="flip-card">
                        <div class="flip-card-inner">
                           <div class="flip-card-front card-inverse-light">
                              <div class="library-image">
                                  <img :src="`${storage_path}/library_Program.png`" alt="" class="lib-img"></div>
                                  <div class="library-info">
                                      <h5>{{ $trans("data.Program Library") }}</h5>
                                      <h6>{{ $trans("data.Number of Files") }}: <span class="library-number">0</span> </h6>
                              </div>
                           </div>
                           <div class="flip-card-back card-inverse-dark">
                              <div class="back-up">
                                   <h3>{{ $trans("data.Program Library") }}</h3>
                                   <h4>{{ $trans("data.Number of Files") }}: <span class="library-number">0</span></h4>
                              </div>
                              <div class="back-down">
                                  <button class="btn btn-dark btn-block">{{ $trans("data.View Library") }}</button>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6 col-lg-3">
                     <div class="flip-card">
                        <div class="flip-card-inner">
                           <div class="flip-card-front card-inverse-light">
                              <div class="library-image">
                                  <img :src="`${storage_path}/library_learning.png`" alt="" class="lib-img"></div>
                                  <div class="library-info">
                                      <h5>{{ $trans("data.Learning Websites Library") }}</h5>
                                      <h6>{{ $trans("data.Number of Files") }}: <span class="library-number">0</span> </h6>
                              </div>
                           </div>
                           <div class="flip-card-back card-inverse-dark">
                              <div class="back-up">
                                   <h3>{{ $trans("data.Learning Websites Library") }}</h3>
                                   <h4>{{ $trans("data.Number of Files") }}: <span class="library-number">0</span></h4>
                              </div>
                              <div class="back-down">
                                  <button class="btn btn-dark btn-block">{{ $trans("data.View Library") }}</button>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6 col-lg-3">
                     <div class="flip-card">
                        <div class="flip-card-inner">
                           <div class="flip-card-front card-inverse-light">
                              <div class="library-image">
                                  <img :src="`${storage_path}/library_game.png`" alt="" class="lib-img"></div>
                                  <div class="library-info">
                                      <h5>{{ $trans("data.Learning Games Library") }}</h5>
                                      <h6>{{ $trans("data.Number of Files") }}: <span class="library-number">0</span> </h6>
                              </div>
                           </div>
                           <div class="flip-card-back card-inverse-dark">
                              <div class="back-up">
                                   <h3>{{ $trans("data.Learning Games Library") }}</h3>
                                   <h4>{{ $trans("data.Number of Files") }}: <span class="library-number">0</span></h4>
                              </div>
                              <div class="back-down">
                                  <button class="btn btn-dark btn-block">{{ $trans("data.View Library") }}</button>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</template>
<script>
   export default {
        props:['storage_path'],
        data(){
         return{


         }
     },
        created(){

        },
     mounted(){
         this.$lang.setLocale(localStorage.getItem('locale'));
     },
        methods: {


     },
   }
</script>
