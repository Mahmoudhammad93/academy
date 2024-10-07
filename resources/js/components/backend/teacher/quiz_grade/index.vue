<template>
   <div class="assignment-grade">
      <div class="card">
         <div class="card-body">
            <div class="quiz-grade">
                <h2 class="quiz-name">Quiz number 3</h2>
                <div class="titles">
                    <h3>
                   <span>
                      {{$trans('data.Student Name')}}:
                   </span>
                     Mohammed Ahmed
                </h3>
                 <h3>
                   <span>
                      {{$trans('data.Course Name')}}: 
                   </span>
                   English - Level 1
                </h3>
                </div>
               <div id="accordion-2" role="tablist" class="accordion custom-accordion accordion-bordered">
                  <div class="card">
                     <div role="tab" id="heading-4" class="card-header">
                        <h6 class="mb-0">
                           <a data-toggle="collapse" href="#collapse-4" aria-expanded="false" aria-controls="collapse-4" class="collapsed">
                           Question One
                           </a>
                        </h6>
                     </div>
                     <div id="collapse-4" role="tabpanel" aria-labelledby="heading-4" data-parent="#accordion-2" class="collapse switch">
                        <div class="card-body">
                            <div class="assignment-title">
                                        <h2>Write what you know about vuejs</h2>
                                    </div>
                           <div class="row">
                              <div class="col-lg-8 col-md-6 col-sm-12">
                                 <div class="assignment-view">

                                    <iframe :src="`${storage_path}/pdf.pdf`" height="500px" width="100%"></iframe>
                                 </div>
                              </div>
                              <div class="col-lg-4 col-md-6 col-sm-12">
                                 <div class="assignment-data">
                                    <h2>{{$trans('data.Question Data')}}</h2>
                                    <div class="assignment-data-detail">
                                       <p><b>{{$trans('data.Question Name')}}: </b>First One</p>
                                    </div>
                                    <div class="assignment-data-detail">
                                       <p><b>{{$trans('data.Question Full Mark')}}: </b>10</p>
                                    </div>
                                 </div>
                                 <hr>
                                 <div class="assignment-action">
                                    <form class="forms-sample">
                                       <h2>{{$trans('data.Question Action')}}</h2>
                                       <div class="form-group">
                                          <label for="exampleInputUsername1">{{$trans('data.Question Grade')}}</label>
                                          <input type="number" min="0" max="999" class="form-control" id="assignmentGrade" placeholder="Question Grade"/>
                                       </div>
                                       <button type="button" class="btn btn-primary assign-grade">{{$trans('data.Submit')}}</button>
                                    </form>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="card">
                     <div role="tab" id="heading-5" class="card-header">
                        <h6 class="mb-0">
                           <a data-toggle="collapse" href="#collapse-5" aria-expanded="false" aria-controls="collapse-5" class="collapsed">
                           Question Two
                           </a>
                        </h6>
                     </div>
                     <div id="collapse-5" role="tabpanel" aria-labelledby="heading-5" data-parent="#accordion-2" class="collapse switch">
                        <div class="card-body">
                            <div class="assignment-title">
                                        <h2>Write what you know about vuejs</h2>
                                    </div>
                            <div class="row">
                              <div class="col-lg-8 col-md-6 col-sm-12">
                                 <div class="assignment-view">

                                    <div class="assignment-answer">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce cursus massa imperdiet orci euismod, in ultricies diam hendrerit. Integer metus nulla, efficitur ut suscipit in, facilisis nec magna. Pellentesque a consequat urna, ut accumsan nisl. Ut ultricies rhoncus augue, et placerat lacus laoreet et. Interdum et malesuada fames ac ante ipsum primis in faucibus. In sit amet tellus placerat, lobortis leo et, tristique diam. Sed id diam ut turpis faucibus aliquam ac nec massa. Ut arcu ligula, cursus sed metus in, cursus bibendum nunc. In non feugiat ex. Aenean varius eros ac bibendum interdum. Donec eget nunc odio. Phasellus in magna non orci feugiat placerat. Aliquam rutrum commodo bibendum. Vivamus facilisis eleifend ullamcorper.

Etiam maximus dignissim convallis. Donec ornare facilisis odio faucibus dapibus. Morbi erat ligula, gravida in nibh a, vulputate fringilla libero. Aliquam erat volutpat. Praesent finibus vel odio at bibendum. Donec lacinia iaculis erat quis fermentum. Suspendisse lorem nibh, euismod quis tincidunt quis, condimentum eu dolor. Proin auctor interdum dictum. Mauris risus dui, suscipit in rhoncus ac, dictum id lacus. Proin et condimentum eros. Etiam fringilla, nisi eu mollis lobortis, leo sem aliquet ante, quis tristique massa dolor nec justo. Duis at iaculis nisi, vel sagittis libero. Vivamus imperdiet libero id molestie maximus. Phasellus faucibus, nisi consequat posuere volutpat, lorem massa facilisis odio, at varius magna lectus vel orci.

Donec rhoncus nunc sed ex volutpat dignissim. Nulla tempor laoreet efficitur. Nulla a lectus bibendum, vulputate mi eget, efficitur diam. Vivamus sem eros, dapibus nec vestibulum et, aliquet ultrices eros. Cras sed neque et magna suscipit efficitur quis id elit. Maecenas id lorem sed leo convallis aliquam nec quis velit. Proin lectus purus, consequat eget scelerisque ac, mattis non magna. Quisque eu est tempor, aliquet felis vel, efficitur justo. Aliquam tempor auctor augue, eu feugiat velit egestas sit amet. Maecenas porttitor mi id orci fermentum dignissim. Aliquam tortor odio, pulvinar a feugiat id, luctus eu nulla.

Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sodales et lacus sit amet condimentum. In luctus rhoncus ante, ac blandit quam interdum sit amet. Sed non vulputate leo. Donec lacinia magna et lectus facilisis, ac finibus massa vestibulum. Ut risus diam, porttitor eget posuere nec, pretium sit amet elit. Phasellus auctor massa justo, sit amet volutpat ante dignissim quis. Duis placerat eu ligula non mattis. Aliquam tincidunt felis lacus, quis vehicula quam rhoncus sed.

Nam suscipit lorem sit amet erat pulvinar varius. Mauris quis odio commodo, finibus nulla sed, ultrices enim. Sed placerat maximus nunc sed feugiat. Aenean euismod fringilla mattis. Quisque pretium dui ac mollis congue. Quisque consequat enim magna, sed semper orci egestas at. Aliquam purus enim, placerat finibus tortor nec, commodo maximus massa. Nullam at lacinia tortor, in venenatis nunc. In hac habitasse platea dictumst.

Suspendisse ut iaculis nulla, et tincidunt libero. Donec elit ligula, vehicula at varius sit amet, vulputate sed diam. Fusce at urna porttitor, mollis nisi ac, luctus urna. Integer ut auctor tortor, vitae ultrices metus. Quisque ultricies convallis dignissim. Nulla et urna non nibh finibus iaculis sit amet id justo. Aenean viverra erat tempus risus ultrices, eget pharetra ex maximus. Pellentesque finibus volutpat sodales. Maecenas semper massa libero, semper tempor purus sollicitudin et. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nullam blandit imperdiet ligula, eget iaculis lorem viverra id. Mauris in turpis sodales, lobortis mauris eu, rutrum eros. Integer vitae ex a elit auctor porta. Maecenas euismod consequat elementum. In in tempus tellus. Mauris fringilla nulla et posuere sollicitudin.

Aliquam volutpat purus eget suscipit rutrum. Vivamus posuere viverra neque, eget cursus dolor viverra non. Nulla sollicitudin imperdiet auctor. Proin vitae arcu nunc. Donec in ipsum consectetur, imperdiet metus a, blandit ex. Cras at sodales libero. Cras risus eros, fermentum vitae euismod non, consequat vel nibh. Sed ut erat id nibh viverra pellentesque ut nec nulla. Vestibulum enim metus, laoreet commodo ultrices eu, scelerisque non elit. Nunc eu vestibulum mauris. In elementum rutrum mi, ut ornare eros rutrum ac. Suspendisse sed justo aliquet, laoreet quam sit amet, ultricies justo. Mauris in placerat arcu. Nullam sit amet enim in mauris lobortis placerat.

Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vitae enim blandit, fermentum nunc porttitor, commodo urna. Sed ut sodales nisl. Donec pellentesque, tortor sit amet convallis tempor, augue quam pulvinar magna, sed sollicitudin mauris lorem quis sapien. In ut ultricies dui. Vestibulum commodo magna sed mi lacinia pellentesque. Pellentesque et dolor magna. Phasellus aliquam lectus mi, quis egestas ante dictum in. Etiam non scelerisque metus, id tincidunt enim. Pellentesque feugiat interdum porttitor. Phasellus nec imperdiet eros, ac tincidunt leo. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Morbi mattis rhoncus neque sit amet ullamcorper.

Donec et iaculis arcu, quis sodales purus. Donec ac venenatis eros. Donec venenatis, nisl vel tincidunt consequat, odio odio posuere mauris, vel volutpat arcu leo ac nibh. Cras sapien leo, ullamcorper nec diam ac, rutrum venenatis ex. In sed blandit eros. Sed nec condimentum nunc. Quisque sed enim sit amet diam ultricies semper. Phasellus at pellentesque dolor, sit amet efficitur turpis. Cras dolor dui, convallis ac luctus a, laoreet eu ante. In tristique nunc a suscipit suscipit. Ut accumsan vehicula fermentum. Aliquam congue finibus ante in dignissim. Pellentesque et porta dolor. Nulla ac cursus nunc. Pellentesque convallis est a fringilla viverra.

Fusce tristique bibendum nibh ac aliquet. Vestibulum non consectetur felis, eu consequat sem. Nulla porttitor hendrerit nibh in dapibus. Pellentesque consequat dui ut viverra elementum. Ut porta vitae enim ac finibus. Quisque tempor volutpat quam vitae imperdiet. Etiam urna tortor, volutpat nec dui non, egestas elementum augue. Donec vitae tellus urna. Cras quam purus, fermentum et commodo interdum, facilisis vitae nunc. Suspendisse potenti. Aenean nec ante sed quam gravida pretium. Lorem ipsum dolor sit amet, consectetur adipiscing elit.

Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam consequat turpis tellus, sit amet consectetur tortor accumsan hendrerit. Ut nec sem vitae dui lacinia feugiat at ut ligula. Sed consectetur massa id sapien convallis ornare. Integer id lacus et odio posuere vestibulum. Aenean luctus nibh quis fringilla accumsan. Nullam non elementum erat. In porttitor ex sapien, vitae vehicula nibh scelerisque vitae. Ut libero mauris, rutrum vitae mauris nec, finibus eleifend nunc. Curabitur nec felis suscipit, condimentum tellus in, aliquet arcu. Morbi elit elit, porta eget neque non, molestie tempus eros.

Donec eros nunc, fermentum sed nibh quis, luctus posuere dui. Nullam fringilla, odio ut consequat pulvinar, mauris elit mattis risus, eget blandit arcu mi et sem. Vestibulum porta libero nec eros consectetur dictum. Curabitur interdum ut purus in placerat. Aenean sodales enim et velit aliquam, nec lacinia nisl porta. Morbi pulvinar diam molestie odio auctor, vitae euismod dui ullamcorper. Integer ac iaculis dui, aliquet placerat magna. Pellentesque viverra, nunc id vulputate ullamcorper, nunc risus dignissim lacus, consectetur auctor nunc sapien ut lorem. Sed auctor ipsum nec mauris aliquam, eu semper nisl luctus. Quisque eu neque vehicula, mollis felis eu, porttitor enim. Vestibulum ac dapibus lorem, quis euismod dui. Duis sodales, tellus sit amet dapibus semper, est nibh laoreet nunc, at pellentesque ipsum felis nec nisi. Nulla varius nisi ut elit lacinia, vitae eleifend nulla cursus. Nullam sem nisl, tempor vitae mi sit amet, vestibulum sollicitudin leo. Nulla facilisi. Suspendisse sed efficitur libero.

Morbi ullamcorper ante laoreet dolor pulvinar iaculis. Integer consequat, risus a tincidunt aliquet, tortor urna congue nibh, ac tempus sapien magna ut velit. Ut et dignissim felis, in consequat ipsum. Aliquam at enim interdum, feugiat magna id, iaculis ipsum. Pellentesque pellentesque neque non lectus venenatis rutrum. Nunc massa mi, tristique in sagittis sit amet, ullamcorper ac nisl. Praesent lectus sem, mollis sit amet massa at, congue tempor libero. Duis et orci feugiat, vehicula purus et, fermentum eros. Quisque sagittis fermentum turpis a feugiat. Aenean elementum pharetra est, nec lacinia ipsum mollis nec.

Phasellus convallis, ex ut euismod molestie, lectus dui rhoncus mi, at bibendum arcu augue id augue. Sed id risus quis nibh ultrices mattis vel id neque. Vivamus vulputate ac ipsum in gravida. Praesent in interdum ante. Suspendisse potenti. Integer non laoreet lorem. Nulla venenatis maximus diam, sed consectetur mauris vestibulum at. In hac habitasse platea dictumst. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Phasellus sit amet dolor mi. Morbi viverra nulla purus, et vestibulum mi sagittis suscipit. Nam eget mollis felis. Ut et pretium ex. Sed ullamcorper massa porta arcu pulvinar consectetur. Quisque tincidunt mi in orci laoreet pretium.

Nulla tristique accumsan magna, a consequat nunc commodo quis. Proin in fringilla dui. Donec nec viverra orci, quis convallis augue. Duis ac sapien in mi faucibus mattis vitae ac velit. Nam a enim magna. Praesent ut nulla ut libero sagittis elementum. Ut aliquet diam ac molestie suscipit. Vestibulum accumsan, lectus ut convallis ultrices, eros purus volutpat dolor, ornare ultricies tellus felis quis libero. Morbi faucibus, diam eu interdum malesuada, est turpis pellentesque odio, a scelerisque nulla lacus nec turpis. Curabitur vehicula elit lobortis, aliquet ex ut, posuere massa. Curabitur cursus augue at tincidunt ultricies. Vivamus pretium a velit a auctor. Sed elit leo, cursus quis tincidunt at, iaculis nec diam. In in lectus mattis, elementum turpis sed, aliquet lorem. Donec volutpat, augue non vehicula vestibulum, urna orci faucibus nisi, in egestas ipsum velit sed est.

Fusce malesuada dui nisi, iaculis venenatis mauris aliquet nec. Proin non tortor eu quam pulvinar eleifend venenatis et mauris. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec placerat hendrerit elit non fermentum. Sed vel eros eu ipsum commodo sodales. Proin aliquet metus consequat nisi vulputate, a hendrerit massa consectetur. Donec gravida lorem a justo consectetur, a efficitur arcu maximus. Morbi non tincidunt augue. Donec libero risus, eleifend auctor diam vel, mollis ornare quam.

Proin et scelerisque velit. Aenean commodo vestibulum congue. Sed commodo purus nisl, id viverra lorem imperdiet quis. Nam et arcu ac lectus elementum dignissim. Ut interdum est vitae neque viverra suscipit. Quisque ultricies volutpat est in facilisis. Pellentesque dapibus volutpat enim sit amet placerat. Quisque faucibus turpis non mi ultricies rutrum. Ut ultrices, mi pulvinar finibus convallis, dui eros tempor turpis, nec bibendum odio neque vel lectus. Cras non ipsum placerat massa tristique pellentesque. Morbi fringilla nulla et faucibus tincidunt. In bibendum odio augue, vel porta eros dictum sed. Etiam in augue accumsan, imperdiet tortor vel, ullamcorper lectus. Nam consectetur leo vitae ornare condimentum.

Mauris massa odio, gravida congue erat ut, sollicitudin tincidunt augue. Maecenas ultrices ex sapien, id aliquam libero porttitor ac. Nunc lacus sem, suscipit et nunc quis, auctor pellentesque velit. Maecenas convallis nisi at fringilla finibus. Phasellus placerat, metus vel dapibus volutpat, est odio viverra augue, id condimentum mi diam ac mauris. Quisque sodales luctus lorem et auctor. Pellentesque lorem orci, gravida blandit nisi tempor, dapibus auctor nibh. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean accumsan sit amet nunc sit amet sollicitudin.

Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam convallis tellus nec magna malesuada fermentum. Maecenas vulputate lectus in sapien bibendum eleifend. Aliquam ultricies eros id elementum pellentesque. Duis ac mauris lobortis nisl dictum lacinia luctus sed nisl. Ut lacus mi, faucibus sed purus eu, mattis dictum augue. Nunc laoreet, risus ut varius imperdiet, libero lacus vulputate libero, pharetra porta magna lorem ut urna. Curabitur nulla sapien, hendrerit dignissim euismod a, mollis non arcu.

Mauris ligula sapien, condimentum in ultrices id, iaculis a justo. Curabitur ut finibus odio. Praesent sollicitudin at ex eu interdum. Phasellus maximus placerat sem, vel facilisis felis hendrerit accumsan. Donec dui libero, finibus vitae ipsum non, molestie dictum turpis. Donec sit amet elementum neque, sit amet maximus mi. Vivamus luctus velit at lacus dignissim venenatis. Phasellus consequat libero sit amet augue posuere ornare. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Fusce quis iaculis augue.

Etiam ultricies, justo quis scelerisque venenatis, leo erat vehicula quam, a venenatis neque metus nec ex. Cras lacinia nunc nec nisi sollicitudin, nec finibus tellus convallis. Nunc at semper metus. Proin in maximus sapien. Praesent tempus a orci vel congue. Fusce vitae enim mattis, consectetur arcu ac, suscipit libero. Nullam euismod mi sit amet diam consequat, vel varius quam imperdiet. Nulla rhoncus lectus sit amet massa suscipit sagittis. Suspendisse mattis non mauris sed dapibus. Pellentesque et vulputate magna. Suspendisse consectetur neque quis lectus ullamcorper rhoncus. Vestibulum ut cursus purus. Donec mattis pellentesque purus, non elementum tellus scelerisque eu.

Nulla et imperdiet elit. Vivamus ac eros tortor. Vivamus at hendrerit turpis, id dapibus orci. Proin venenatis nulla quis erat aliquam varius. Fusce lacinia tempus massa, eget pulvinar elit efficitur et. Aliquam consequat eros justo, mattis malesuada libero placerat quis. Fusce pretium faucibus lacus vitae tincidunt. Donec vulputate interdum sodales. Proin aliquet ante ante, sed blandit elit dapibus sit amet. Nunc hendrerit, augue eu dictum lobortis, turpis arcu elementum dolor, id rutrum turpis ligula sit amet erat. Ut dapibus, neque id molestie luctus, justo justo aliquam ipsum, pulvinar scelerisque leo lacus eu lectus. Integer nec tempus est, at dictum tortor. Quisque arcu eros, condimentum at congue at, porta sit amet tortor. Maecenas vel ligula justo.

Fusce nec nulla tellus. Vivamus a enim sed urna convallis volutpat. Fusce et condimentum augue. Sed a lorem mattis, tincidunt mauris vitae, elementum nisl. Sed sit amet elit vel magna mattis ornare. Praesent non enim quis neque aliquet viverra. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut quis aliquam lorem. Sed facilisis ornare quam. Nullam pretium eros eu sapien pellentesque posuere. In iaculis, arcu dapibus vulputate consectetur, ex nunc cursus magna, quis venenatis quam lorem ut lectus. Aliquam erat volutpat. Etiam ac odio eu sapien condimentum sollicitudin ac vel sem. Nam tempus enim eget rhoncus mattis. Nam ornare nunc risus, eu condimentum sapien placerat at.

Suspendisse potenti. Ut feugiat, ligula ac gravida tempor, mi arcu rhoncus nunc, sed commodo erat sapien id ex. Donec ut pretium urna. In hac habitasse platea dictumst. Integer aliquam leo ut bibendum varius. Morbi nec hendrerit nunc. Cras sed placerat arcu. Ut condimentum porttitor turpis, ac condimentum ipsum egestas vel. In sed lorem quis purus euismod dictum sed in magna. Aliquam ut sapien sapien. Nulla lacinia augue eu lacus pretium, non tincidunt neque mattis. Mauris sed bibendum augue, ut euismod metus. In eget quam vitae odio pellentesque efficitur. Mauris faucibus rhoncus leo nec consectetur. Integer vulputate consequat mi.

Etiam fringilla mollis pulvinar. Proin tempor turpis eget odio molestie, sed convallis ante faucibus. In hendrerit volutpat justo at tincidunt. In hac habitasse platea dictumst. Sed dolor nulla, rutrum pretium purus et, ultrices aliquet sem. Pellentesque sit amet laoreet tellus, vel rutrum eros. Mauris nunc quam, varius dapibus tortor et, eleifend auctor urna. Cras vitae augue quam.

Maecenas nec tellus mollis, lacinia nibh id, fermentum erat. Fusce egestas libero vel commodo condimentum. Donec eget consectetur quam. Donec sodales sapien est, quis faucibus risus dictum sagittis. Phasellus finibus, libero id vehicula malesuada, neque sem sollicitudin dolor, quis volutpat nibh ligula sed mauris. In hac habitasse platea dictumst. Donec semper sed nibh eget luctus. Nullam rhoncus nec arcu in venenatis. Nam accumsan consectetur eros, eu eleifend erat dictum elementum. Nam dignissim congue ligula. Morbi euismod nibh ac cursus viverra. Suspendisse ultrices est eleifend orci scelerisque, vitae cursus metus euismod. Praesent elementum dolor nec leo posuere sagittis in eget massa. Phasellus ac ligula felis.

Maecenas nisi tellus, suscipit non purus non, porta pretium justo. Proin finibus sem non augue imperdiet, eget ullamcorper purus facilisis. Nam fringilla diam et sodales aliquam. Mauris ac sapien hendrerit elit pellentesque mollis a ac mi. Quisque maximus finibus sem, vel placerat mauris sagittis sit amet. Suspendisse potenti. Aliquam eros ligula, luctus id augue ut, dictum mollis ante. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Suspendisse id imperdiet nulla. Integer consequat quam ut quam tempus, eget molestie orci cursus. Suspendisse eget eleifend arcu. Nam a volutpat augue. Vestibulum porttitor arcu quis odio eleifend, finibus sagittis massa gravida.

Sed at tincidunt nisi. Phasellus eget porttitor risus, sit amet convallis orci. Vestibulum tincidunt felis ut metus convallis, eget venenatis sem convallis. Maecenas ipsum enim, pulvinar non malesuada et, mattis id libero. Sed tempus, nisl vitae bibendum aliquet, ante magna condimentum ex, eu porta nulla mi et lorem. Vivamus eu dapibus elit, varius ultricies dolor. Duis faucibus lorem eu leo ultrices, in molestie turpis gravida. Phasellus fringilla interdum ante, a lobortis turpis iaculis a. Nunc consectetur ex in est dignissim tempor. Maecenas vitae orci sit amet arcu semper tincidunt. Sed hendrerit vel felis vitae fermentum. Vestibulum a gravida metus. Donec eget quam vitae felis tincidunt finibus ac id purus. Suspendisse potenti.

Vivamus et orci eu metus lacinia hendrerit. Nunc eget luctus est. Integer sed pretium nunc. Aenean pharetra pulvinar nisl ac tempus. Quisque eu consequat sem, in ullamcorper nisl. Proin vitae iaculis nisl. Morbi aliquam consectetur nulla malesuada imperdiet.

Phasellus ac luctus elit. Curabitur quis pharetra nunc, id molestie tellus. Quisque facilisis sem purus, eu viverra orci luctus vel. Suspendisse potenti. Duis aliquam ex accumsan, ultricies lorem in, faucibus ante. Curabitur in posuere lectus, semper tincidunt est. Aliquam at ligula rhoncus, consectetur est nec, consequat ante. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras volutpat mi in diam facilisis consectetur sed lacinia turpis. Fusce eu commodo ligula. Suspendisse eu pretium urna. Nullam luctus quis velit vitae tempor.

Morbi congue nisi id pretium laoreet. Vestibulum diam erat, vehicula non hendrerit vitae, posuere eget augue. Nam mattis sapien at facilisis imperdiet. Aenean suscipit consectetur consectetur. Aliquam ornare lectus sit amet lacus semper fermentum. Nulla non imperdiet ligula. Ut eu dui vitae lectus pretium mattis. Morbi sit amet purus a elit efficitur commodo. Fusce vitae vestibulum mi. Vivamus tempor lacinia nunc, et fermentum urna tempus quis.

Donec at dignissim elit, dictum cursus sapien. Nulla aliquet scelerisque orci nec venenatis. Etiam laoreet sem eu augue aliquam, et dictum orci vulputate. Praesent vel odio vitae arcu cursus vehicula non id elit. Aenean tristique eros in arcu suscipit, sed molestie mauris elementum. Morbi sodales velit a dui dapibus accumsan. Nunc nec mauris ipsum. Nam et urna sed nisi auctor vehicula. Integer imperdiet neque non felis viverra, sit amet ultrices velit tempor. In dignissim velit id cursus laoreet. Sed iaculis maximus vestibulum. Praesent faucibus purus felis, ac placerat ex suscipit aliquet.

Nullam porttitor ante arcu, non egestas ligula feugiat vel. Suspendisse blandit augue risus, non aliquam mi egestas at. Proin et turpis eros. In facilisis ullamcorper tristique. Vivamus a erat vitae lectus interdum vestibulum. Aenean condimentum nisi et ornare fermentum. Nunc vestibulum, orci at semper sollicitudin, elit nisl semper massa, eget sagittis ex erat vel orci. Duis mi purus, egestas nec maximus nec, malesuada at metus. Morbi ut elit viverra augue luctus venenatis ut eu mauris. Fusce eleifend lacinia posuere. Mauris vitae efficitur justo. Nulla quis pulvinar ligula. Cras tempus imperdiet metus, sed rhoncus mauris volutpat ut. Nam metus purus, feugiat in purus consectetur, suscipit molestie dui. Quisque laoreet bibendum enim, eget bibendum nulla rhoncus non. Quisque scelerisque ante ut interdum placerat.

In hac habitasse platea dictumst. Suspendisse vitae est ac turpis ornare varius sit amet ac turpis. Mauris malesuada porttitor enim congue dignissim. Phasellus egestas, nunc in iaculis auctor, nisl lorem rhoncus arcu, id egestas felis dolor in enim. Nunc at dictum turpis. Morbi ac nunc eu nisi finibus finibus. Duis risus augue, blandit facilisis neque id, sollicitudin condimentum nulla. Nunc lacus elit, gravida sit amet odio vel, lacinia lacinia quam. Nulla aliquet, felis eu malesuada blandit, est neque ornare velit, rutrum fringilla libero lacus sit amet massa. Etiam dictum turpis nisl, a convallis dolor lobortis at.

Maecenas eget pharetra odio. Phasellus et ullamcorper lacus. Phasellus vitae congue mi. Ut tincidunt blandit augue nec consequat. Cras luctus congue hendrerit. Duis non leo vitae tellus scelerisque hendrerit. Duis vel mauris nec sapien condimentum congue in ac quam. Suspendisse finibus venenatis quam, nec maximus nunc ultricies id. Integer laoreet ipsum eu ex dictum feugiat.

Nullam vestibulum lorem vel libero egestas, quis pretium augue convallis. Quisque imperdiet vehicula dolor, vel molestie tortor consectetur sit amet. Praesent fermentum magna nec lorem porttitor sodales. Fusce gravida tempus luctus. Praesent finibus mauris eu nulla facilisis, et elementum nibh tempor. Morbi suscipit lorem vel cursus semper. Mauris ultricies vehicula venenatis. Praesent efficitur dignissim tincidunt. Ut venenatis vel velit sit amet ultrices. Nulla semper lobortis arcu, lacinia ornare ipsum laoreet in. In imperdiet congue diam, at bibendum risus varius at. Mauris a porta est.

Maecenas in elementum nulla, sed ullamcorper est. Proin hendrerit rhoncus metus a sagittis. Praesent accumsan tellus a magna aliquam, ut laoreet ligula egestas. Praesent lobortis, neque id ultricies finibus, ipsum lorem lobortis eros, eget consectetur tellus eros vehicula eros. Praesent bibendum consequat eros. Curabitur turpis enim, iaculis sed odio imperdiet, sollicitudin lobortis ante. Nunc eu urna sed sapien malesuada hendrerit aliquam et ligula. Curabitur sit amet tempor urna, vel aliquet tortor. Pellentesque venenatis leo quis diam mattis, id egestas ligula hendrerit.

In scelerisque commodo est at tempor. Donec eget nisl id purus euismod vehicula a eget orci. Donec finibus ut sem sit amet molestie. Curabitur fermentum sem non pharetra eleifend. Aenean dui elit, dapibus quis nisl eget, ornare dapibus quam. Maecenas pharetra sapien nunc, a venenatis diam pretium non. Mauris auctor, enim ac ultrices congue, orci mi bibendum enim, ut mattis purus mauris vel tellus.

Sed sed felis in lacus consectetur luctus. Nullam rhoncus mi sem, nec faucibus nisl commodo sit amet. Praesent vel pulvinar eros. Vivamus facilisis, turpis id placerat ultricies, nibh enim pharetra nisi, et fringilla massa ante sed tortor. Morbi molestie vestibulum magna, rhoncus congue quam vulputate sit amet. Curabitur id feugiat ex, in varius felis. Duis vulputate augue vitae orci ultricies, sed gravida lorem condimentum. Nam sollicitudin lorem ut ultricies tincidunt. Duis vitae eros ac ligula vehicula lacinia sed vitae libero. Duis et convallis lectus. Aenean hendrerit feugiat viverra. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Pellentesque nec feugiat lectus. Quisque cursus consectetur enim at porttitor. Integer at tristique nisi, sed porttitor justo.

Proin mattis dignissim est, sed dictum risus accumsan non. Integer suscipit vitae arcu eu euismod. Duis semper dictum suscipit. Phasellus euismod elementum mi id mattis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Suspendisse tristique erat nunc, at placerat turpis maximus sed. Sed ut ex in elit dignissim tempus. Suspendisse potenti.

Vivamus rhoncus faucibus ipsum. Donec non purus consectetur, interdum lectus at, porttitor quam. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Morbi ac malesuada ante. Etiam feugiat rutrum ipsum. Sed porttitor, massa a ultricies finibus, nisl lorem ultricies arcu, eget accumsan ante massa a nulla. Aliquam rutrum neque non lorem pretium, vel tincidunt tortor sollicitudin. Aliquam erat volutpat. Aliquam libero massa, commodo nec vestibulum in, rutrum a risus. Nulla semper condimentum enim ut lacinia.

Duis tincidunt imperdiet gravida. Curabitur volutpat nisl in maximus ullamcorper. Phasellus commodo, sem vel volutpat viverra, elit tortor pulvinar risus, ut mattis mauris odio nec lacus. Nunc mi diam, hendrerit vel semper ut, placerat vel sem. Nullam scelerisque a odio commodo hendrerit. Aliquam iaculis accumsan justo, quis placerat metus laoreet quis. In a volutpat est, quis mattis neque. Suspendisse vitae nunc a augue sagittis pretium. Pellentesque placerat nisl id magna faucibus viverra. Vestibulum sit amet eleifend nunc. Vestibulum consequat, ligula non aliquam sodales, orci elit luctus libero, sit amet semper nunc lectus vel massa.

Donec vel augue sit amet neque egestas euismod. Phasellus posuere turpis vel nisi sagittis, ut pulvinar eros vulputate. Morbi et nunc elementum, auctor tortor sed, venenatis lacus. Nulla facilisi. Vivamus commodo nec nisl ut fermentum. Curabitur quis nisl vitae ligula rutrum blandit. Proin suscipit eros faucibus, rhoncus augue vitae, vestibulum odio.

Maecenas porttitor mi nec sodales fermentum. Vivamus vel tortor efficitur, tempus ante at, vestibulum justo. Aliquam erat volutpat. Proin scelerisque sollicitudin sem, vel scelerisque libero interdum at. Suspendisse et placerat mi. Ut id felis elementum, cursus purus eget, tincidunt massa. Curabitur pellentesque, sapien et aliquet laoreet, ipsum felis facilisis purus, quis condimentum lorem turpis ac leo. Sed facilisis porta nulla dapibus dapibus. Curabitur velit felis, malesuada a finibus vitae, interdum eu lacus. Vivamus sit amet nisi feugiat risus rhoncus lobortis. Sed ornare orci in mi varius, rutrum ornare tortor viverra. Suspendisse porta a felis in tempus. Nunc eu tristique lectus. Aenean porttitor dolor sed nulla ornare vehicula.

Etiam vel diam nec urna euismod maximus eget vel massa. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Proin nulla nisl, feugiat non convallis ac, porttitor sed tortor. Nulla a volutpat sapien. Curabitur vestibulum suscipit fermentum. Sed vestibulum ornare magna, vel tincidunt nunc bibendum sit amet. Ut vitae felis in eros feugiat commodo a vitae magna. Aliquam vel pellentesque diam. Integer enim diam, volutpat molestie sem et, porta vestibulum turpis. Aliquam erat volutpat. Vestibulum commodo placerat augue eget varius.

Morbi id euismod tellus, id cursus ipsum. Ut pellentesque vestibulum augue et blandit. Maecenas quis sapien ac arcu aliquet mollis. Aliquam erat volutpat. Quisque pulvinar ex vel fermentum commodo. Integer rutrum sodales dolor, eget placerat velit auctor aliquet. Aliquam erat volutpat. Donec viverra ut felis sed ultrices.

Sed commodo velit ut imperdiet dignissim. Aliquam erat volutpat. Praesent quis suscipit lectus. Proin hendrerit libero id accumsan rutrum. Phasellus dignissim rhoncus quam blandit pulvinar. Etiam leo leo, ullamcorper et nisl nec, eleifend dictum lorem. Fusce tempus, est vitae vulputate dignissim, libero lacus aliquam dolor, vitae fringilla sapien elit sit amet augue. Quisque in sodales nunc, sit amet porttitor mauris. Donec nec velit vitae eros mattis condimentum ut vel velit. Nam consectetur, felis id consequat lobortis, nibh orci faucibus ligula, tincidunt malesuada quam sem maximus lorem. Vestibulum quis metus vitae arcu venenatis lobortis vel sit amet urna. Nunc sagittis semper augue quis fringilla. Quisque interdum posuere mauris, sed semper enim. Curabitur leo sem, mattis non dui et, eleifend convallis nunc. Morbi arcu odio, venenatis at condimentum nec, posuere ut urna.

Mauris velit purus, dictum quis ante vitae, ullamcorper laoreet est. Suspendisse consequat eu eros eu consectetur. Quisque sit amet lectus a risus ultricies gravida. Aliquam quis massa vitae elit condimentum ornare. Proin facilisis erat at augue mattis, nec porta ante mollis. Quisque eu sapien congue, mattis ex vel, placerat sem. Nulla tincidunt viverra tempor. Quisque felis leo, lobortis id congue eu, dictum non mauris. Donec gravida, nisl eu faucibus consequat, lectus eros cursus nisi, sed egestas augue sapien sed nisi. Maecenas a placerat lacus. Integer mollis porta eleifend. Nunc rutrum, sapien sed mattis luctus, metus felis fringilla lorem, dignissim laoreet libero felis vitae nunc. Nulla magna felis, mollis in diam ut, imperdiet elementum urna. Praesent sed odio vitae ligula commodo commodo elementum eget ante.

Mauris volutpat mattis magna, ac imperdiet ligula. Maecenas et urna ex. Phasellus id ex velit. Aenean ac est nec erat aliquam luctus. In at fermentum dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean fringilla est varius, semper justo vulputate, tincidunt orci.

Praesent sit amet ornare eros. Donec ut auctor tortor, vitae fringilla nulla. Fusce nec enim a diam vehicula placerat. Vivamus lorem mauris, gravida eleifend ornare dictum, fermentum sit amet lorem. Curabitur ut lacinia augue, ac dignissim magna. Aenean quis semper lorem. Nam sollicitudin viverra nunc, ut hendrerit magna fermentum vitae. Ut quis dapibus eros. Suspendisse quis tortor in nisi varius tristique non nec purus. Pellentesque luctus tortor ac lectus blandit sagittis.

Sed interdum risus quis lacus porta sodales. Nulla elementum rutrum turpis, eget suscipit mauris gravida nec. Phasellus id dolor arcu. Sed porttitor erat sit amet erat porttitor condimentum. Nam vehicula commodo sem, sed pellentesque odio molestie ut. Vestibulum orci nibh, scelerisque in mattis eu, posuere vehicula lectus. Etiam ultricies consectetur feugiat. Suspendisse suscipit mattis odio at commodo. Suspendisse potenti. Aliquam est erat, iaculis sit amet pretium sed, congue aliquam nulla. Nullam commodo ac augue ac bibendum. Mauris augue enim, sollicitudin eget diam quis, fermentum ultrices nunc. Curabitur auctor ultricies purus.

Morbi semper tempus mi, ac tincidunt justo malesuada non. Praesent non quam vel dolor porta posuere. Proin volutpat cursus orci vitae volutpat. Morbi non diam lacinia, vulputate diam in, pretium lacus. Nunc semper varius aliquet. Sed laoreet, mi ut ullamcorper suscipit, ex dolor lobortis nibh, et congue dolor mi lobortis massa. Curabitur at rhoncus mauris, non vestibulum leo. Quisque placerat sollicitudin dolor in ullamcorper. Sed tempus, orci sed pharetra placerat, nibh nisl ornare lorem, id accumsan est massa sit amet felis.

Suspendisse ultrices facilisis massa non faucibus. Nullam sagittis dignissim ante. Integer auctor blandit nibh vel porta. Duis nec sapien id libero egestas accumsan ultrices non ligula. Cras aliquam velit mi, eget tincidunt nisl tincidunt congue. Mauris facilisis, ex a vulputate facilisis, turpis nisl elementum odio, id sollicitudin libero eros id est. Donec sit amet odio nec orci porttitor aliquet.

Aliquam a pellentesque turpis, quis fermentum elit. Curabitur eu erat ut est rhoncus ultricies. Nullam nec neque sed urna gravida gravida. Sed ante dolor, imperdiet vulputate gravida vitae, fringilla non eros. Sed commodo sed neque a laoreet. Morbi accumsan mollis tellus, et eleifend enim accumsan ut. Vestibulum a dictum ipsum. Integer bibendum et lectus non consectetur. Integer suscipit, lectus at aliquet auctor, dolor nibh posuere nisi, in malesuada justo quam a orci.

Suspendisse volutpat lacus vel tempor iaculis. Duis a lacinia turpis. Cras egestas ligula maximus efficitur mollis. Nam id posuere eros. Etiam nec viverra arcu. Aliquam tristique pellentesque nisi, at semper orci venenatis sit amet. Maecenas pharetra ex ut pellentesque posuere. Quisque posuere felis ac tellus volutpat posuere. Nam tempor, tortor quis consectetur porta, nibh tortor vestibulum tellus, quis sollicitudin tellus dolor sed libero. Aenean non mattis tortor, quis vehicula lorem. Nulla non volutpat dolor. Sed non eros dignissim, pretium ligula at, commodo libero. Pellentesque accumsan quam vel felis euismod lacinia. Vestibulum aliquam suscipit fermentum. Integer id neque id neque aliquam molestie. Nulla facilisi.

Curabitur maximus non lacus vitae posuere. Sed auctor nisi volutpat, porta leo vel, laoreet ligula. Morbi hendrerit elementum sollicitudin. Duis consectetur a nibh eu porta. Aenean hendrerit sed libero sit amet euismod. In ut volutpat arcu. Duis id interdum felis. Donec pulvinar feugiat tortor, sit amet lobortis neque varius nec. Nunc lacinia lacinia laoreet.

Generated 56 paragraphs, 5000 words, 33893 bytes of Lorem Ipsum
                                        </p>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-4 col-md-6 col-sm-12">
                                 <div class="assignment-data">
                                    <h2>{{$trans('data.Question Data')}}</h2>
                                    <div class="assignment-data-detail">
                                       <p><b>{{$trans('data.Question Name')}}: </b>First One</p>
                                    </div>
                                    <div class="assignment-data-detail">
                                       <p><b>{{$trans('data.Question Full Mark')}}: </b>10</p>
                                    </div>
                                 </div>
                                 <hr>
                                 <div class="assignment-action">
                                    <form class="forms-sample">
                                       <h2>{{$trans('data.Question Action')}}</h2>
                                       <div class="form-group">
                                          <label for="exampleInputUsername1">{{$trans('data.Question Grade')}}</label>
                                          <input type="number" min="0" max="999" class="form-control" id="assignmentGrade" placeholder="Question Grade"/>
                                       </div>
                                       <button type="button" class="btn btn-primary assign-grade">{{$trans('data.Submit')}}</button>
                                    </form>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="card">
                     <div role="tab" id="heading-6" class="card-header">
                        <h6 class="mb-0">
                           <a data-toggle="collapse" href="#collapse-6" aria-expanded="false" aria-controls="collapse-6" class="collapsed">
                           Question three
                           </a>
                        </h6>
                     </div>
                     <div id="collapse-6" role="tabpanel" aria-labelledby="heading-6" data-parent="#accordion-2" class="collapse switch">
                        <div class="card-body">
                            <div class="assignment-title">
                                        <h2>Write what you know about vuejs</h2>
                                    </div>
                            <div class="row">
                              <div class="col-lg-8 col-md-6 col-sm-12">
                                 <div class="assignment-view">
                                    <iframe :src="`${storage_path}/pdf.pdf`" height="500px" width="100%"></iframe>
                                 </div>
                              </div>
                              <div class="col-lg-4 col-md-6 col-sm-12">
                                 <div class="assignment-data">
                                    <h2>{{$trans('data.Question Data')}}</h2>
                                    <div class="assignment-data-detail">
                                       <p><b>{{$trans('data.Question Name')}}: </b>First One</p>
                                    </div>
                                    <div class="assignment-data-detail">
                                       <p><b>{{$trans('data.Question Full Mark')}}: </b>10</p>
                                    </div>
                                 </div>
                                 <hr>
                                 <div class="assignment-action">
                                    <form class="forms-sample">
                                       <h2>{{$trans('data.Question Action')}}</h2>
                                       <div class="form-group">
                                          <label for="exampleInputUsername1">{{$trans('data.Question Grade')}}</label>
                                          <input type="number" min="0" max="999" class="form-control" id="assignmentGrade" placeholder="Question Grade"/>
                                       </div>
                                       <button type="button" class="btn btn-primary assign-grade">{{$trans('data.Submit')}}</button>
                                    </form>
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
   </div>
</template>
<script>
   import axios from "axios";

   export default {
       props: ["storage_path", "locale_lang"],
       data() {
           return {};
       },
       created() {},
       mounted() {
           if (this.locale_lang) {
               this.$lang.setLocale(this.locale_lang);
           } else {
               this.$lang.setLocale("en");
           }
       },
       methods: {}
   };
</script>
