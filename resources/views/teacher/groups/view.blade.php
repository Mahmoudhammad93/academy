@extends('layouts.cp_admin.shared.layout')
@section('content')
<div class="card">
   <div class="card-body">
      <h4 class="card-title">{{__('data.View group')}}</h4>
      <div class="form-group">
         <label for="exampleFormControlSelect1">{{__('data.Select group')}}</label>
         <select class="form-control form-control-lg" id="exampleFormControlSelect1">
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
         </select>
      </div>
      <div class="view-primary-data light">
         <div class="inner-view-primary-data">
            <div class="row view-tops-row">
               <div class="col-sm-12 col-xl-6 col-md-6 view-tops">
                  <h4>{{__('data.Group name')}}: <span>First group</span></h4>
               </div>
               <div class="col-sm-12 col-xl-6 col-md-6 view-tops">
                  <h4>{{__('data.Subject name')}}: <span>First subject</span></h4>
               </div>
               <div class="col-sm-12 col-xl-6 col-md-6 view-tops">
                  <h4>{{__('data.Grade')}}: <span>First grade</span></h4>
               </div>
               <div class="col-sm-12 col-xl-6 col-md-6 view-tops">
                  <h4>{{__('data.Term')}}: <span>First term</span></h4>
               </div>
            </div>
            <div class="share-group text-center">
               <h3 class="text-primary">{{__('data.Share group')}}</h3>
               <p>{{__('data.You can share group by')}}: </p>
               <div class="share-actions">
                  <a href="#"><i class="mdi mdi-telegram"></i></a>
                  <a href="#"><i class="mdi mdi-facebook"></i></a>
                  <a class="btn btn-primary" href="#">{{__('data.Copy link')}}</a>
               </div>
            </div>
         </div>
      </div>
      <div class="view-tabs-holder">
         <div class="view-tabs">
            <h4 class="card-title">{{__('data.Members')}}</h4>
            <ul class="nav nav-tabs" role="tablist">
               <li class="nav-item">
                  <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home-1" role="tab" aria-controls="home-1" aria-selected="true">{{__('data.Students')}}</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile-1" role="tab" aria-controls="profile-1" aria-selected="false">{{__('data.Teaching staff')}}</a>
               </li>
            </ul>
            <div class="tab-content">
               <div class="tab-pane fade active show" id="home-1" role="tabpanel" aria-labelledby="home-tab">
                  <div class="row">
                     <div class="col-md-12 mb-2"><a href="#" class="btn btn-success btn-create"><i class="mdi mdi-account-plus"></i> {{__('data.Add students to group')}}
                        </a>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-12">
                        <div class="table-responsive">
                           <div id="order-listing_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                              <div class="row">
                                 <div class="col-sm-12 col-md-6">
                                    <div class="dataTables_length" id="order-listing_length">
                                       <label>
                                          Show
                                          <select name="order-listing_length" aria-controls="order-listing" class="custom-select custom-select-sm form-control">
                                             <option value="5">5</option>
                                             <option value="10">10</option>
                                             <option value="15">15</option>
                                             <option value="-1">All</option>
                                          </select>
                                          entries
                                       </label>
                                    </div>
                                 </div>
                                 <div class="col-sm-12 col-md-6">
                                    <div id="order-listing_filter" class="dataTables_filter"><label><input type="search" class="form-control" placeholder="Search" aria-controls="order-listing"></label></div>
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="col-sm-12">
                                    <table id="order-listing" class="table dataTable no-footer" role="grid" aria-describedby="order-listing_info">
                                       <thead>
                                          <tr role="row">
                                             <th class="sorting_asc" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-sort="ascending">{{__('data.ID')}}</th>
                                             <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1">{{__('data.Name')}}</th>
                                             <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1">{{__('data.Picture')}}</th>
                                             <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1">{{__('data.Grade')}}</th>
                                             <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1">{{__('data.Payment')}}</th>
                                             <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1">{{__('data.View profile')}}</th>
                                             <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1">{{__('data.Status')}}</th>
                                             <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1">{{__('data.Actions')}}</th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                          <tr role="row" class="odd">
                                             <td class="sorting_1">1</td>
                                             <td>Mohamed Salman</td>
                                             <td><img  src="{{asset('storage/file/user.png')}}"></td>
                                             <td>Grade one</td>
                                             <td>Paid</td>
                                             <td><a href="#" class="btn btn-outline-primary">View</a></td>
                                             <td>
                                                <label class="badge badge-info">Deactivated</label>
                                             </td>
                                             <td>
                                                <button class="btn btn-outline-success">Activate</button>
                                             </td>
                                          </tr>
                                       </tbody>
                                    </table>
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="col-sm-12 col-md-5">
                                    <div class="dataTables_info" id="order-listing_info" role="status" aria-live="polite">Showing 1 to 10 of 10 entries</div>
                                 </div>
                                 <div class="col-sm-12 col-md-7">
                                    <div class="dataTables_paginate paging_simple_numbers" id="order-listing_paginate">
                                       <ul class="pagination">
                                          <li class="paginate_button page-item previous disabled" id="order-listing_previous"><a href="#" aria-controls="order-listing" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li>
                                          <li class="paginate_button page-item active"><a href="#" aria-controls="order-listing" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                                          <li class="paginate_button page-item next disabled" id="order-listing_next"><a href="#" aria-controls="order-listing" data-dt-idx="2" tabindex="0" class="page-link">Next</a></li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="tab-pane fade" id="profile-1" role="tabpanel" aria-labelledby="profile-tab">
                  <div class="row">
                     <div class="col-md-12 mb-2"><a href="#" class="btn btn-success btn-create"><i class="mdi mdi-account-plus"></i> {{__('data.Add staff members to group')}}
                        </a>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-12">
                        <div class="table-responsive">
                           <div id="order-listing_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                              <div class="row">
                                 <div class="col-sm-12 col-md-6">
                                    <div class="dataTables_length" id="order-listing_length">
                                       <label>
                                          Show
                                          <select name="order-listing_length" aria-controls="order-listing" class="custom-select custom-select-sm form-control">
                                             <option value="5">5</option>
                                             <option value="10">10</option>
                                             <option value="15">15</option>
                                             <option value="-1">All</option>
                                          </select>
                                          entries
                                       </label>
                                    </div>
                                 </div>
                                 <div class="col-sm-12 col-md-6">
                                    <div id="order-listing_filter" class="dataTables_filter"><label><input type="search" class="form-control" placeholder="Search" aria-controls="order-listing"></label></div>
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="col-sm-12">
                                    <table id="order-listing" class="table dataTable no-footer" role="grid" aria-describedby="order-listing_info">
                                       <thead>
                                          <tr role="row">
                                             <th class="sorting_asc" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-sort="ascending">{{__('data.ID')}}</th>
                                             <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1">{{__('data.Name')}}</th>
                                             <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1">{{__('data.Picture')}}</th>
                                             <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1">{{__('data.Grade')}}</th>
                                             <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1">{{__('data.Payment')}}</th>
                                             <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1">{{__('data.View profile')}}</th>
                                             <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1">{{__('data.Status')}}</th>
                                             <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1">{{__('data.Actions')}}</th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                          <tr role="row" class="odd">
                                             <td class="sorting_1">1</td>
                                             <td>Mohamed Salman</td>
                                             <td><img  src="{{asset('storage/file/user.png')}}"></td>
                                             <td>Grade one</td>
                                             <td>Paid</td>
                                             <td><a href="#" class="btn btn-outline-primary">View</a></td>
                                             <td>
                                                <label class="badge badge-info">Deactivated</label>
                                             </td>
                                             <td>
                                                <button class="btn btn-outline-success">Activate</button>
                                             </td>
                                          </tr>
                                       </tbody>
                                    </table>
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="col-sm-12 col-md-5">
                                    <div class="dataTables_info" id="order-listing_info" role="status" aria-live="polite">Showing 1 to 10 of 10 entries</div>
                                 </div>
                                 <div class="col-sm-12 col-md-7">
                                    <div class="dataTables_paginate paging_simple_numbers" id="order-listing_paginate">
                                       <ul class="pagination">
                                          <li class="paginate_button page-item previous disabled" id="order-listing_previous"><a href="#" aria-controls="order-listing" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li>
                                          <li class="paginate_button page-item active"><a href="#" aria-controls="order-listing" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                                          <li class="paginate_button page-item next disabled" id="order-listing_next"><a href="#" aria-controls="order-listing" data-dt-idx="2" tabindex="0" class="page-link">Next</a></li>
                                       </ul>
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
</div>
@endsection
