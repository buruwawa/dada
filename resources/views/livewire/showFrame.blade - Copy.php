<!DOCTYPE html>

<html lang="en">
<!--begin::Head-->

<head>

    <meta charset="utf-8" />
    <title>Admin | Dashboard</title>
    <meta name="description" content="Updates and statistics" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
   
    <!--begin::Global Theme Styles(used by all pages)-->
    <link href="../../../assets/css/style.css?v=1.0" rel="stylesheet" type="text/css" />
    <!--end::Global Theme Styles-->

    <link href="../../../assets/api/pace/pace-theme-flat-top.css" rel="stylesheet" type="text/css" />
    <link href="../../../assets/api/mcustomscrollbar/jquery.mCustomScrollbar.css" rel="stylesheet" type="text/css" />
    <link href="../../../assets/api/datatable/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
    <link href="../../../assets/css/multiple-select.min.css" rel="stylesheet">
    <link href="../../../assets/css/daterangepicker.css" rel="stylesheet">


    <link rel="shortcut icon" href="../../assets/images/misc/logo.svg" />

    @livewireStyles
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="tc_body" class="header-fixed header-mobile-fixed subheader-enabled aside-enabled aside-fixed">
   <!-- Paste this code after body tag -->

   <!-- pos header -->

   <header class="pos-header bg-white">
       <div class="container-fluid">
           <div class="row align-items-center">
               <div class="col-xl-4 col-lg-4 col-md-6">
                   <div class="greeting-text">
                    <a href="/pos">
                        <h3 class="card-label mb-0 font-weight-bold text-primary">POS
                        </h3></a>
                         <a href="/pos-final">
                        <h3 class="card-label mb-0 font-weight-bold text-primary">POS2
                        </h3></a>
                    <h3 class="card-label mb-0 ">
                        {{ Auth::user()->name }}
                    </h3>
                   </div>

               </div>
               <div class="col-xl-4 col-lg-5 col-md-6  clock-main">
                <div class="clock">
                  <div class="datetime-content">
                    <ul>
                        <li id="hours"></li>
                        <li id="point1">:</li>
                        <li id="min"></li>
                        <li id="point">:</li>
                        <li id="sec"></li>
                    </ul>
                  </div>
                 <div class="datetime-content">
                    <div id="Date"  class=""></div>
                 </div>

                </div>

               </div>
               <div class="col-xl-4 col-lg-3 col-md-12  order-lg-last order-second">

                <div class="topbar justify-content-end">
                 <div class="dropdown mega-dropdown">
                     <div id="id2" class="topbar-item "  data-toggle="dropdown" data-display="static">
                         <div class="btn btn-icon w-auto h-auto btn-clean d-flex align-items-center py-0 mr-3">

                             <span class="symbol symbol-35 symbol-light-success">
                                 <span class="symbol-label bg-primary  font-size-h5 ">

                                     <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="#fff" class="bi bi-calculator-fill" viewBox="0 0 16 16">
                                         <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm2 .5v2a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 .5-.5v-2a.5.5 0 0 0-.5-.5h-7a.5.5 0 0 0-.5.5zm0 4v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5zM4.5 9a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1zM4 12.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5zM7.5 6a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1zM7 9.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5zm.5 2.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1zM10 6.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5zm.5 2.5a.5.5 0 0 0-.5.5v4a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-4a.5.5 0 0 0-.5-.5h-1z"/>
                                       </svg>
                                 </span>
                             </span>
                         </div>
                     </div>

                     <div class="dropdown-menu dropdown-menu-right calu" style="min-width: 248px;">
                         <div class="calculator">
                             <div class="input" id="input"></div>
                             <div class="buttons">
                               <div class="operators">
                                 <div>+</div>
                                 <div>-</div>
                                 <div>&times;</div>
                                 <div>&divide;</div>
                               </div>
                                <div class="d-flex justify-content-between">
                                 <div class="leftPanel">
                                     <div class="numbers">
                                       <div>7</div>
                                       <div>8</div>
                                       <div>9</div>
                                     </div>
                                     <div class="numbers">
                                       <div>4</div>
                                       <div>5</div>
                                       <div>6</div>
                                     </div>
                                     <div class="numbers">
                                       <div>1</div>
                                       <div>2</div>
                                       <div>3</div>
                                     </div>
                                     <div class="numbers">
                                       <div>0</div>
                                       <div>.</div>
                                       <div id="clear">C</div>
                                     </div>
                                   </div>
                                   <div class="equal" id="result">=</div>
                                </div>
                             </div>
                           </div>
                     </div>

                 </div>

                    <div class="topbar-item folder-data">
                     <div class="btn btn-icon  w-auto h-auto btn-clean d-flex align-items-center py-0 mr-3"  data-toggle="modal" data-target="#folderpop"
                     >
                         <span class="badge badge-pill badge-primary">55</span>
                         <span class="symbol symbol-35  symbol-light-success">
                             <span class="symbol-label bg-warning font-size-h5 ">
                                 <svg width="20px" height="20px" xmlns="http://www.w3.org/2000/svg" fill="#ffff"  viewBox="0 0 16 16">
                                     <path d="M9.828 3h3.982a2 2 0 0 1 1.992 2.181l-.637 7A2 2 0 0 1 13.174 14H2.826a2 2 0 0 1-1.991-1.819l-.637-7a1.99 1.99 0 0 1 .342-1.31L.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3zm-8.322.12C1.72 3.042 1.95 3 2.19 3h5.396l-.707-.707A1 1 0 0 0 6.172 2H2.5a1 1 0 0 0-1 .981l.006.139z"></path>
                                   </svg>
                             </span>
                         </span>
                     </div>

                    </div>

                 <div class="dropdown">
                     <div class="topbar-item" data-toggle="dropdown" data-display="static">
                         <div class="btn btn-icon w-auto h-auto btn-clean d-flex align-items-center py-0">

                             <span class="symbol symbol-35 symbol-light-success">
                                 <span class="symbol-label font-size-h5 ">
                                     <svg width="20px" height="20px" viewBox="0 0 16 16" class="bi bi-person-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                         <path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"></path>
                                     </svg>
                                 </span>
                             </span>
                         </div>
                     </div>

                 <div class="dropdown-menu dropdown-menu-right" style="min-width: 150px;">
                         <a href="#" class="dropdown-item">
                             <span class="svg-icon svg-icon-xl svg-icon-primary mr-2">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-power">
                                     <path d="M18.36 6.64a9 9 0 1 1-12.73 0"></path>
                                     <line x1="12" y1="2" x2="12" y2="12"></line>
                                 </svg>
                             </span>
                             Logout
                         </a>
                     </div>

                 </div>
                </div>

                </div>
           </div>
       </div>
   </header>



<div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="">

                    <div class="card-body">

   @if($message= Session::get('success'))
   <div class="alert alert-success" role="alert">
       <button aria-label="Close" class="close" data-dismiss="alert" type="button">
       <span aria-hidden="true">&times;</span></button>
       <strong>Well done!</strong> {{ $message }}
   </div>
   @endif
   @if($message= Session::get('delete'))
   <div class="alert alert-danger" role="alert">
       <button aria-label="Close" class="close" data-dismiss="alert" type="button">
       <span aria-hidden="true">&times;</span></button>
       <strong>Attention!</strong> {{ $message }}
   </div>
   @endif
   @if($message= Session::get('error'))

   <div class="alert alert-danger" role="alert">
       <button aria-label="Close" class="close" data-dismiss="alert" type="button">
       <span aria-hidden="true">&times;</span></button>
       <strong>Sorry!</strong> {{ $message }}
   </div>
   @endif
   {{-- Validation error message --}}
   @if ($errors->any())
   <div class="alert alert-danger">
       <ul>
           @foreach ($errors->all() as $error)
               <li>{{ $error }}</li>
           @endforeach
       </ul>
   </div>
   @endif

    {{ $slot }}
                        {{--  @livewire('show')  --}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="../../../assets/js/plugin.bundle.min.js"></script>
    <script src="../../../assets/js/bootstrap.bundle.min.js"></script>
    <script src="../../../assets/js/multiple-select.min.js"></script>
    <script src="../../../assets/js/jquery.datatables.min.js"></script>
    <script src="../../../assets/js/sweetalert.js"></script>
    <script src="../../../assets/js/sweetalert1.js"></script>
    <script src="../../../assets/js/script.bundle.js"></script>

    <script>
          jQuery(function() {
            jQuery('.arabic-select').multipleSelect({
          filter: true,
          filterAcceptOnEnter: true
        })
      });
      jQuery(function() {
            jQuery('.js-example-basic-single').multipleSelect({
          filter: true,
          filterAcceptOnEnter: true
        })
      });
      jQuery(document).ready(function() {
        jQuery('#orderTable').DataTable({

            "info":     false,
            "paging":   false,
            "searching": false,

        "columnDefs": [ {
          "targets"  : 'no-sort',
          "orderable": false,
        }]
        });
    } );


    // installment calc.
    function showInstallment(){
        var selectBox = document.getElementById('pay');
        var userInput = selectBox.options[selectBox.selectedIndex].value;
        if(userInput =='Installment'){
            document.getElementById('installment').style.visibility='visible';
        }
        else{
            document.getElementById('installment').style.visibility='hidden';
        }
    }
    </script>
   @livewireScripts
</body>
<!--end::Body-->
</html>
