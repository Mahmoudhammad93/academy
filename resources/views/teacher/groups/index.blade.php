@extends('layouts.cp_admin.shared.layout')
@section('content')
<div class="card">
   <div class="card-body">
      <h4 class="card-title">@lang('data.My Groups')</h4>
      <div class="mt-4">
         <div class="accordion custom-accordion accordion-bordered" id="accordion-2" role="tablist">
            <div class="card">
               <div class="card-header" role="tab" id="heading-4">
                  <h6 class="mb-0">
                     <a data-toggle="collapse" href="#collapse-4" aria-expanded="false" aria-controls="collapse-4" class="collapsed">
                     Group one
                     </a>
                  </h6>
               </div>
               <div id="collapse-4" class="collapse switch" role="tabpanel" aria-labelledby="heading-4" data-parent="#accordion-2">
                  <div class="card-body">
                     <div class="row">
                        <div class="col-lg-4 col-md-12 col-sm-12">
                           <div class="image-title">
                              <div class="title">
                                 <h3>Chemistry</h3>
                              </div>
                              <div class="image">
                                 <img src="https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/gh-romantic-chemistry-1603305968.png?crop=0.865xw:0.865xh;0.0674xw,0.135xh&resize=640:*" alt="profile Pic" height="100%" width="100%">
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-8 col-md-12col-sm-12">
                           <div class="main-data">
                              <div class="custom-list">
                                 <div class="custom-list-holder">
                                    <div class="custom-list-title">{{__('data.Grade')}}:</div>
                                    <div class="custom-list-item">Grade one</div>
                                 </div>
                                 <div class="custom-list-holder">
                                    <div class="custom-list-title">{{__('data.Term')}}:</div>
                                    <div class="custom-list-item">Spring</div>
                                 </div>
                                 <div class="custom-list-holder">
                                    <div class="custom-list-title">{{__('data.Number of students')}}:</div>
                                    <div class="custom-list-item"> 100</div>
                                 </div>
                              </div>
                              <div class="custom-buttons-holder">
                                 <button type="button" class="btn btn-outline-primary btn-fw">View</button>
                                 <button type="button" class="btn btn-outline-success btn-fw">Edit</button>
                                 <button type="button" class="btn btn-outline-danger btn-fw">Delete</button>
                              </div>
                              <div class="table-responsive pt-3">
                                 <table class="table table-bordered">
                                    <thead>
                                       <tr>
                                          <th>
                                             #
                                          </th>
                                          <th>
                                             First name
                                          </th>
                                          <th>
                                             Progress
                                          </th>
                                          <th>
                                             Amount
                                          </th>
                                          <th>
                                             Deadline
                                          </th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       <tr>
                                          <td>
                                             1
                                          </td>
                                          <td>
                                             Herman Beck
                                          </td>
                                          <td>
                                             <div class="progress">
                                                <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                             </div>
                                          </td>
                                          <td>
                                             $ 77.99
                                          </td>
                                          <td>
                                             May 15, 2015
                                          </td>
                                       </tr>
                                       <tr>
                                          <td>
                                             2
                                          </td>
                                          <td>
                                             Messsy Adam
                                          </td>
                                          <td>
                                             <div class="progress">
                                                <div class="progress-bar bg-danger" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                             </div>
                                          </td>
                                          <td>
                                             $245.30
                                          </td>
                                          <td>
                                             July 1, 2015
                                          </td>
                                       </tr>
                                       <tr>
                                          <td>
                                             3
                                          </td>
                                          <td>
                                             John Richards
                                          </td>
                                          <td>
                                             <div class="progress">
                                                <div class="progress-bar bg-warning" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                             </div>
                                          </td>
                                          <td>
                                             $138.00
                                          </td>
                                          <td>
                                             Apr 12, 2015
                                          </td>
                                       </tr>
                                       <tr>
                                          <td>
                                             4
                                          </td>
                                          <td>
                                             Peter Meggik
                                          </td>
                                          <td>
                                             <div class="progress">
                                                <div class="progress-bar bg-primary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                             </div>
                                          </td>
                                          <td>
                                             $ 77.99
                                          </td>
                                          <td>
                                             May 15, 2015
                                          </td>
                                       </tr>
                                       <tr>
                                          <td>
                                             5
                                          </td>
                                          <td>
                                             Edward
                                          </td>
                                          <td>
                                             <div class="progress">
                                                <div class="progress-bar bg-danger" role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                                             </div>
                                          </td>
                                          <td>
                                             $ 160.25
                                          </td>
                                          <td>
                                             May 03, 2015
                                          </td>
                                       </tr>
                                       <tr>
                                          <td>
                                             6
                                          </td>
                                          <td>
                                             John Doe
                                          </td>
                                          <td>
                                             <div class="progress">
                                                <div class="progress-bar bg-info" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                             </div>
                                          </td>
                                          <td>
                                             $ 123.21
                                          </td>
                                          <td>
                                             April 05, 2015
                                          </td>
                                       </tr>
                                       <tr>
                                          <td>
                                             7
                                          </td>
                                          <td>
                                             Henry Tom
                                          </td>
                                          <td>
                                             <div class="progress">
                                                <div class="progress-bar bg-warning" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                             </div>
                                          </td>
                                          <td>
                                             $ 150.00
                                          </td>
                                          <td>
                                             June 16, 2015
                                          </td>
                                       </tr>
                                    </tbody>
                                 </table>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="card">
               <div class="card-header" role="tab" id="heading-5">
                  <h6 class="mb-0">
                     <a class="collapsed" data-toggle="collapse" href="#collapse-5" aria-expanded="false" aria-controls="collapse-5">
                     Group two
                     </a>
                  </h6>
               </div>
               <div id="collapse-5" class="collapse switch" role="tabpanel" aria-labelledby="heading-5" data-parent="#accordion-2">
                  <div class="card-body">
                     <div class="row">
                        <div class="col-lg-4 col-md-12 col-sm-12">
                           <div class="image-title">
                              <div class="title">
                                 <h3>Chemistry</h3>
                              </div>
                              <div class="image">
                                 <img src="https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/gh-romantic-chemistry-1603305968.png?crop=0.865xw:0.865xh;0.0674xw,0.135xh&resize=640:*" alt="profile Pic" height="100%" width="100%">
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-8 col-md-12col-sm-12">
                           <div class="main-data">
                              <div class="custom-list">
                                 <div class="custom-list-holder">
                                    <div class="custom-list-title">{{__('data.Grade')}}:</div>
                                    <div class="custom-list-item">Grade one</div>
                                 </div>
                                 <div class="custom-list-holder">
                                    <div class="custom-list-title">{{__('data.Term')}}:</div>
                                    <div class="custom-list-item">Spring</div>
                                 </div>
                                 <div class="custom-list-holder">
                                    <div class="custom-list-title">{{__('data.Number of students')}}:</div>
                                    <div class="custom-list-item"> 100</div>
                                 </div>
                              </div>
                              <div class="custom-buttons-holder">
                                 <button type="button" class="btn btn-outline-primary btn-fw">View</button>
                                 <button type="button" class="btn btn-outline-success btn-fw">Edit</button>
                                 <button type="button" class="btn btn-outline-danger btn-fw">Delete</button>
                              </div>
                              <div class="table-responsive pt-3">
                                 <table class="table table-bordered">
                                    <thead>
                                       <tr>
                                          <th>
                                             #
                                          </th>
                                          <th>
                                             First name
                                          </th>
                                          <th>
                                             Progress
                                          </th>
                                          <th>
                                             Amount
                                          </th>
                                          <th>
                                             Deadline
                                          </th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       <tr>
                                          <td>
                                             1
                                          </td>
                                          <td>
                                             Herman Beck
                                          </td>
                                          <td>
                                             <div class="progress">
                                                <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                             </div>
                                          </td>
                                          <td>
                                             $ 77.99
                                          </td>
                                          <td>
                                             May 15, 2015
                                          </td>
                                       </tr>
                                       <tr>
                                          <td>
                                             2
                                          </td>
                                          <td>
                                             Messsy Adam
                                          </td>
                                          <td>
                                             <div class="progress">
                                                <div class="progress-bar bg-danger" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                             </div>
                                          </td>
                                          <td>
                                             $245.30
                                          </td>
                                          <td>
                                             July 1, 2015
                                          </td>
                                       </tr>
                                       <tr>
                                          <td>
                                             3
                                          </td>
                                          <td>
                                             John Richards
                                          </td>
                                          <td>
                                             <div class="progress">
                                                <div class="progress-bar bg-warning" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                             </div>
                                          </td>
                                          <td>
                                             $138.00
                                          </td>
                                          <td>
                                             Apr 12, 2015
                                          </td>
                                       </tr>
                                       <tr>
                                          <td>
                                             4
                                          </td>
                                          <td>
                                             Peter Meggik
                                          </td>
                                          <td>
                                             <div class="progress">
                                                <div class="progress-bar bg-primary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                             </div>
                                          </td>
                                          <td>
                                             $ 77.99
                                          </td>
                                          <td>
                                             May 15, 2015
                                          </td>
                                       </tr>
                                       <tr>
                                          <td>
                                             5
                                          </td>
                                          <td>
                                             Edward
                                          </td>
                                          <td>
                                             <div class="progress">
                                                <div class="progress-bar bg-danger" role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                                             </div>
                                          </td>
                                          <td>
                                             $ 160.25
                                          </td>
                                          <td>
                                             May 03, 2015
                                          </td>
                                       </tr>
                                       <tr>
                                          <td>
                                             6
                                          </td>
                                          <td>
                                             John Doe
                                          </td>
                                          <td>
                                             <div class="progress">
                                                <div class="progress-bar bg-info" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                             </div>
                                          </td>
                                          <td>
                                             $ 123.21
                                          </td>
                                          <td>
                                             April 05, 2015
                                          </td>
                                       </tr>
                                       <tr>
                                          <td>
                                             7
                                          </td>
                                          <td>
                                             Henry Tom
                                          </td>
                                          <td>
                                             <div class="progress">
                                                <div class="progress-bar bg-warning" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                             </div>
                                          </td>
                                          <td>
                                             $ 150.00
                                          </td>
                                          <td>
                                             June 16, 2015
                                          </td>
                                       </tr>
                                    </tbody>
                                 </table>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="card">
               <div class="card-header" role="tab" id="heading-6">
                  <h6 class="mb-0">
                     <a class="collapsed" data-toggle="collapse" href="#collapse-6" aria-expanded="false" aria-controls="collapse-6">
                     Group three
                     </a>
                  </h6>
               </div>
               <div id="collapse-6" class="collapse switch" role="tabpanel" aria-labelledby="heading-6" data-parent="#accordion-2">
                  <div class="card-body">
                     <div class="row">
                        <div class="col-lg-4 col-md-12 col-sm-12">
                           <div class="image-title">
                              <div class="title">
                                 <h3>Chemistry</h3>
                              </div>
                              <div class="image">
                                 <img src="https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/gh-romantic-chemistry-1603305968.png?crop=0.865xw:0.865xh;0.0674xw,0.135xh&resize=640:*" alt="profile Pic" height="100%" width="100%">
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-8 col-md-12col-sm-12">
                           <div class="main-data">
                              <div class="custom-list">
                                 <div class="custom-list-holder">
                                    <div class="custom-list-title">{{__('data.Grade')}}:</div>
                                    <div class="custom-list-item">Grade one</div>
                                 </div>
                                 <div class="custom-list-holder">
                                    <div class="custom-list-title">{{__('data.Term')}}:</div>
                                    <div class="custom-list-item">Spring</div>
                                 </div>
                                 <div class="custom-list-holder">
                                    <div class="custom-list-title">{{__('data.Number of students')}}:</div>
                                    <div class="custom-list-item"> 100</div>
                                 </div>
                              </div>
                              <div class="custom-buttons-holder">
                                 <button type="button" class="btn btn-outline-primary btn-fw">View</button>
                                 <button type="button" class="btn btn-outline-success btn-fw">Edit</button>
                                 <button type="button" class="btn btn-outline-danger btn-fw">Delete</button>
                              </div>
                              <div class="table-responsive pt-3">
                                 <table class="table table-bordered">
                                    <thead>
                                       <tr>
                                          <th>
                                             #
                                          </th>
                                          <th>
                                             First name
                                          </th>
                                          <th>
                                             Progress
                                          </th>
                                          <th>
                                             Amount
                                          </th>
                                          <th>
                                             Deadline
                                          </th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       <tr>
                                          <td>
                                             1
                                          </td>
                                          <td>
                                             Herman Beck
                                          </td>
                                          <td>
                                             <div class="progress">
                                                <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                             </div>
                                          </td>
                                          <td>
                                             $ 77.99
                                          </td>
                                          <td>
                                             May 15, 2015
                                          </td>
                                       </tr>
                                       <tr>
                                          <td>
                                             2
                                          </td>
                                          <td>
                                             Messsy Adam
                                          </td>
                                          <td>
                                             <div class="progress">
                                                <div class="progress-bar bg-danger" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                             </div>
                                          </td>
                                          <td>
                                             $245.30
                                          </td>
                                          <td>
                                             July 1, 2015
                                          </td>
                                       </tr>
                                       <tr>
                                          <td>
                                             3
                                          </td>
                                          <td>
                                             John Richards
                                          </td>
                                          <td>
                                             <div class="progress">
                                                <div class="progress-bar bg-warning" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                             </div>
                                          </td>
                                          <td>
                                             $138.00
                                          </td>
                                          <td>
                                             Apr 12, 2015
                                          </td>
                                       </tr>
                                       <tr>
                                          <td>
                                             4
                                          </td>
                                          <td>
                                             Peter Meggik
                                          </td>
                                          <td>
                                             <div class="progress">
                                                <div class="progress-bar bg-primary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                             </div>
                                          </td>
                                          <td>
                                             $ 77.99
                                          </td>
                                          <td>
                                             May 15, 2015
                                          </td>
                                       </tr>
                                       <tr>
                                          <td>
                                             5
                                          </td>
                                          <td>
                                             Edward
                                          </td>
                                          <td>
                                             <div class="progress">
                                                <div class="progress-bar bg-danger" role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                                             </div>
                                          </td>
                                          <td>
                                             $ 160.25
                                          </td>
                                          <td>
                                             May 03, 2015
                                          </td>
                                       </tr>
                                       <tr>
                                          <td>
                                             6
                                          </td>
                                          <td>
                                             John Doe
                                          </td>
                                          <td>
                                             <div class="progress">
                                                <div class="progress-bar bg-info" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                             </div>
                                          </td>
                                          <td>
                                             $ 123.21
                                          </td>
                                          <td>
                                             April 05, 2015
                                          </td>
                                       </tr>
                                       <tr>
                                          <td>
                                             7
                                          </td>
                                          <td>
                                             Henry Tom
                                          </td>
                                          <td>
                                             <div class="progress">
                                                <div class="progress-bar bg-warning" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                             </div>
                                          </td>
                                          <td>
                                             $ 150.00
                                          </td>
                                          <td>
                                             June 16, 2015
                                          </td>
                                       </tr>
                                    </tbody>
                                 </table>
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
