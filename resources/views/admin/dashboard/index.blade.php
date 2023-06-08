@extends('admin.index')
@section('title')
    {{ $title }}
@endsection
@section('content')
    <!-- BEGIN SIDEBPANEL-->
    <!-- END SIDEBAR -->
    <!-- END SIDEBPANEL-->
    <!-- START PAGE-CONTAINER -->
    <div class="page-container ">
        <!-- START HEADER -->
        <!-- END HEADER -->
        <!-- START PAGE CONTENT WRAPPER -->
        <div class="page-content-wrapper ">
            <!-- START PAGE CONTENT -->
            <div class="content sm-gutter">
                <!-- START JUMBOTRON -->
                <div data-pages="parallax">
                    <div class="container-fluid p-l-25 p-r-25 sm-p-l-0 sm-p-r-0">
                        <div class="inner">
                            <!-- START BREADCRUMB -->
                            <ol class="breadcrumb sm-p-b-5">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- END JUMBOTRON -->
                <!-- START CONTAINER FLUID -->
                <div class="container-fluid p-l-25 p-r-25 p-t-0 p-b-25 sm-padding-10">
                    <!-- START ROW -->
                    <div class="row">
                        <div class="col-lg-3 col-sm-6  d-flex flex-column">
                            <!-- START WIDGET widget_map_sales-->
                            <!-- START ITEM -->
                            <div class="card social-card share  full-width m-b-10 no-border" data-social="item">
                                <div class="card-header ">
                                    <h5 class="text-primary pull-left fs-12 d-flex align-items-center">Update <i
                                            class="pg-icon">circle_fill</i></h5>
                                    <div class="pull-right small hint-text d-flex align-items-center">
                                        5,345 <i class="pg-icon m-l-5">comment</i>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="card-description">
                                    <h3>page dashboard Version 3.0 now release with limitless layout possibilities</h3>
                                </div>
                                <div class="card-footer clearfix">
                                    <div class="pull-left">via <span class="text-complete">Pages</span>
                                    </div>
                                    <div class="pull-right hint-text">
                                        July 23
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <!-- END ITEM -->
                            <!-- END WIDGET -->
                            <!-- START WIDGET widget_weekly_sales_card-->
                            <div class="card no-border widget-loader-bar m-b-10">
                                <div class="container-xs-height full-height">
                                    <div class="row-xs-height">
                                        <div class="col-xs-height col-top">
                                            <div class="card-header  top-left top-right">
                                                <div class="card-title">
                                                    <span class="font-montserrat all-caps d-flex align-items-center">Weekly
                                                        Sales <i class="pg-icon">chevron_right</i>
                                                    </span>
                                                </div>
                                                <div class="card-controls">
                                                    <ul>
                                                        <li><a href="#" class="portlet-refresh text-black"
                                                                data-toggle="refresh"><i
                                                                    class="portlet-icon portlet-icon-refresh"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row-xs-height">
                                        <div class="col-xs-height col-top">
                                            <div class="p-l-20 p-t-50 p-b-40 p-r-20">
                                                <h3 class="no-margin p-b-5">$24,000</h3>
                                                <span class="small hint-text pull-left">71% of total goal</span>
                                                <span class="pull-right small text-primary">$23,000</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row-xs-height">
                                        <div class="col-xs-height col-bottom">
                                            <div class="progress progress-small m-b-0">
                                                <!-- START BOOTSTRAP PROGRESS (http://getbootstrap.com/components/#progress) -->
                                                <div class="progress-bar progress-bar-primary" style="width:71%"></div>
                                                <!-- END BOOTSTRAP PROGRESS -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END WIDGET -->
                            <!-- START WIDGET widget_weekly_sales_card-->
                            <div class="card no-border widget-loader-bar m-b-10">
                                <div class="container-xs-height full-height">
                                    <div class="row-xs-height">
                                        <div class="col-xs-height col-top">
                                            <div class="card-header  top-left top-right">
                                                <div class="card-title">
                                                    <span class="font-montserrat all-caps d-flex align-items-center">Page
                                                        Visits <i class="pg-icon">chevron_right</i>
                                                    </span>
                                                </div>
                                                <div class="card-controls">
                                                    <ul>
                                                        <li><a href="#" class="portlet-refresh text-black"
                                                                data-toggle="refresh"><i
                                                                    class="portlet-icon portlet-icon-refresh"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row-xs-height">
                                        <div class="col-xs-height col-top">
                                            <div class="p-l-20 p-t-50 p-b-40 p-r-20">
                                                <h3 class="no-margin p-b-5">423</h3>
                                                <span class="small hint-text pull-left">22% higher</span>
                                                <span class="pull-right small text-danger">$23,000</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row-xs-height">
                                        <div class="col-xs-height col-bottom">
                                            <div class="progress progress-small m-b-0">
                                                <!-- START BOOTSTRAP PROGRESS (http://getbootstrap.com/components/#progress) -->
                                                <div class="progress-bar progress-bar-danger" style="width:15%"></div>
                                                <!-- END BOOTSTRAP PROGRESS -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END WIDGET -->
                        </div>
                        <div class="col-lg-3 col-sm-6  d-flex flex-column">
                            <!-- START ITEM -->
                            <div class="card social-card share  full-width m-b-10 no-border" data-social="item">
                                <div class="card-header clearfix">
                                    <h5 class="text-success pull-left fs-12 d-flex align-items-center">Stock Market <i
                                            class="pg-icon">circle_fill</i></h5>
                                    <div class="pull-right small hint-text d-flex align-items-center">
                                        5,345 <i class="pg-icon m-l-5">comment</i>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="card-description">
                                    <h5 class='no-margin'>Apple Inc.</h5>
                                    <h5 class="small hint-text no-margin">NASDAQ: AAPL - Nov 13 8:37 AM ET</h5>
                                    <h3 class="m-b-0">111.25 <span class="text-success"><i
                                                class="pg-icon text-success">arrow_up</i>
                                            0.15</span>
                                    </h3>
                                </div>
                                <div class="card-footer clearfix">
                                    <div class="pull-left">by <span class="text-success">John Smith</span>
                                    </div>
                                    <div class="pull-right hint-text">
                                        Apr 23
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <!-- END ITEM -->
                            <!-- START ITEM -->
                            <div class="card social-card share share-other full-width m-b-10 d-flex flex-1 full-height no-border sm-vh-75"
                                data-social="item">
                                <div class="circle" data-toggle="tooltip" title="Label" data-container="body">
                                </div>
                                <div class="card-content flex-1"
                                    data-pages-bg-image="{{ asset('themes/page/assets/img/social_new.jpg') }}">
                                    <ul class="buttons ">
                                        <li>
                                            <a href="#"><i class="pg-icon">expand</i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="pg-icon">heart</i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-description">
                                    <p><a href="#">#TBT</a> :D</p>
                                </div>
                                <div class="card-footer clearfix">
                                    <div class="time">few seconds ago</div>
                                    <ul class="reactions">
                                        <li><a href="#" class="d-flex align-items-center">5,345 <i
                                                    class="pg-icon m-l-5">comment</i></a>
                                        </li>
                                        <li><a href="#" class="d-flex align-items-center">23K <i
                                                    class="pg-icon m-l-5">heart</i></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-header clearfix">
                                    <div class="user-pic">
                                        <img alt="Avatar" width="33" height="33"
                                            data-src-retina="{{ asset('themes/page/assets/img/profiles/avatar_small2x.jpg') }}"
                                            data-src="{{ asset('themes/page/assets/img/profiles/avatar.jpg') }}"
                                            src="{{ asset('themes/page/assets/img/profiles/avatar_small2x.jpg') }}">
                                    </div>
                                    <h5>David Nester</h5>
                                    <h6>Shared a link on your wall</h6>
                                </div>
                            </div>
                            <!-- END ITEM -->
                        </div>
                        <div class="col-lg-6 m-b-10 d-flex">
                            <!-- START WIDGET widget_tableWidget.tpl-->
                            <div class="widget-11 widget-11-3 card no-border no-margin widget-loader-bar">
                                <div class="card-header">
                                    <div class="card-title">Today's Table
                                    </div>
                                    <div class="card-controls">
                                        <ul>
                                            <li><a data-toggle="refresh" class="card-refresh" href="#"><i
                                                        class="card-icon card-icon-refresh"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="p-l-20 p-r-20 p-b-10 p-t-5">
                                    <div class="pull-left">
                                        <h3 class="text-primary no-margin">Pages</h3>
                                    </div>
                                    <h4 class="pull-right semi-bold no-margin"><sup>
                                            <small class="semi-bold">$</small>
                                        </sup> 102,967
                                    </h4>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="widget-11-3-table auto-overflow">
                                    <table class="table table-condensed table-hover">
                                        <tbody>
                                            <tr>
                                                <td class=" fs-12">Purchase CODE #2345</td>
                                                <td class="text-right">
                                                    <span class="hint-text small">dewdrops</span>
                                                </td>
                                                <td class="text-right b-r b-dashed b-grey">
                                                    <span class="hint-text small">Qty 1</span>
                                                </td>
                                                <td>
                                                    <span class="font-montserrat fs-18">$27</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class=" fs-12">Purchase CODE #2345</td>
                                                <td class="text-right">
                                                    <span class="hint-text small">johnsmith</span>
                                                </td>
                                                <td class="text-right b-r b-dashed b-grey">
                                                    <span class="hint-text small">Qty 1</span>
                                                </td>
                                                <td>
                                                    <span class="font-montserrat fs-18 text-primary">$1000</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class=" fs-12">Purchase CODE #2345</td>
                                                <td class="text-right">
                                                    <span class="hint-text small">janedrooler</span>
                                                </td>
                                                <td class="text-right b-r b-dashed b-grey">
                                                    <span class="hint-text small">Qty 1</span>
                                                </td>
                                                <td>
                                                    <span class="font-montserrat fs-18">$27</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class=" fs-12">Purchase CODE #2345</td>
                                                <td class="text-right">
                                                    <span class="hint-text small">johnsmith</span>
                                                </td>
                                                <td class="text-right b-r b-dashed b-grey">
                                                    <span class="hint-text small">Qty 1</span>
                                                </td>
                                                <td>
                                                    <span class="font-montserrat fs-18 text-primary">$1000</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class=" fs-12">Purchase CODE #2345</td>
                                                <td class="text-right">
                                                    <span class="hint-text small">dewdrops</span>
                                                </td>
                                                <td class="text-right b-r b-dashed b-grey">
                                                    <span class="hint-text small">Qty 1</span>
                                                </td>
                                                <td>
                                                    <span class="font-montserrat fs-18">$27</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class=" fs-12">Purchase CODE #2345</td>
                                                <td class="text-right">
                                                    <span class="hint-text small">johnsmith</span>
                                                </td>
                                                <td class="text-right b-r b-dashed b-grey">
                                                    <span class="hint-text small">Qty 1</span>
                                                </td>
                                                <td>
                                                    <span class="font-montserrat fs-18 text-primary">$1000</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class=" fs-12">Purchase CODE #2345</td>
                                                <td class="text-right">
                                                    <span class="hint-text small">dewdrops</span>
                                                </td>
                                                <td class="text-right b-r b-dashed b-grey">
                                                    <span class="hint-text small">Qty 1</span>
                                                </td>
                                                <td>
                                                    <span class="font-montserrat fs-18">$27</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class=" fs-12">Purchase CODE #2345</td>
                                                <td class="text-right">
                                                    <span class="hint-text small">johnsmith</span>
                                                </td>
                                                <td class="text-right b-r b-dashed b-grey">
                                                    <span class="hint-text small">Qty 1</span>
                                                </td>
                                                <td>
                                                    <span class="font-montserrat fs-18 text-primary">$1000</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class=" fs-12">Purchase CODE #2345</td>
                                                <td class="text-right">
                                                    <span class="hint-text small">dewdrops</span>
                                                </td>
                                                <td class="text-right b-r b-dashed b-grey">
                                                    <span class="hint-text small">Qty 1</span>
                                                </td>
                                                <td>
                                                    <span class="font-montserrat fs-18">$27</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class=" fs-12">Purchase CODE #2345</td>
                                                <td class="text-right">
                                                    <span class="hint-text small">johnsmith</span>
                                                </td>
                                                <td class="text-right b-r b-dashed b-grey">
                                                    <span class="hint-text small">Qty 1</span>
                                                </td>
                                                <td>
                                                    <span class="font-montserrat fs-18 text-primary">$1000</span>
                                                </td>
                                            </tr>
                                            </tr>
                                            <tr>
                                                <td class=" fs-12">Purchase CODE #2345</td>
                                                <td class="text-right">
                                                    <span class="hint-text small">johnsmith</span>
                                                </td>
                                                <td class="text-right b-r b-dashed b-grey">
                                                    <span class="hint-text small">Qty 1</span>
                                                </td>
                                                <td>
                                                    <span class="font-montserrat fs-18 text-primary">$1000</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class=" fs-12">Purchase CODE #2345</td>
                                                <td class="text-right">
                                                    <span class="hint-text small">dewdrops</span>
                                                </td>
                                                <td class="text-right b-r b-dashed b-grey">
                                                    <span class="hint-text small">Qty 1</span>
                                                </td>
                                                <td>
                                                    <span class="font-montserrat fs-18">$27</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class=" fs-12">Purchase CODE #2345</td>
                                                <td class="text-right">
                                                    <span class="hint-text small">johnsmith</span>
                                                </td>
                                                <td class="text-right b-r b-dashed b-grey">
                                                    <span class="hint-text small">Qty 1</span>
                                                </td>
                                                <td>
                                                    <span class="font-montserrat fs-18 text-primary">$1000</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class=" fs-12">Purchase CODE #2345</td>
                                                <td class="text-right">
                                                    <span class="hint-text small">dewdrops</span>
                                                </td>
                                                <td class="text-right b-r b-dashed b-grey">
                                                    <span class="hint-text small">Qty 1</span>
                                                </td>
                                                <td>
                                                    <span class="font-montserrat fs-18">$27</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class=" fs-12">Purchase CODE #2345</td>
                                                <td class="text-right">
                                                    <span class="hint-text small">johnsmith</span>
                                                </td>
                                                <td class="text-right b-r b-dashed b-grey">
                                                    <span class="hint-text small">Qty 1</span>
                                                </td>
                                                <td>
                                                    <span class="font-montserrat fs-18 text-primary">$1000</span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="p-t-15 p-b-15 p-l-20 p-r-20">
                                    <p class="small no-margin">
                                        <a href="#" class="btn-circle-arrow b-grey"><i
                                                class="pg-icon">chevron_down</i></a>
                                        <span class="hint-text ">Show more details of <a href="#"> Revox pvt ltd
                                            </a></span>
                                    </p>
                                </div>
                            </div>
                            <!-- END WIDGET -->
                        </div>
                    </div>
                    <!-- END ROW -->
                    <!-- START ROW -->
                    <div class="row">
                        <div class="col-lg-4 sm-p-b-10">
                            <!-- START WIDGET widget_pendingComments.tpl-->
                            <div class=" card   no-margin widget-loader-circle todolist-widget pending-projects-widget">
                                <div class="card-header ">
                                    <div class="card-title">
                                        <span class="d-flex align-items-center font-montserrat all-caps">
                                            Recent projects <i class="pg-icon">chevron_right</i>
                                        </span>
                                    </div>
                                    <div class="card-controls">
                                        <ul>
                                            <li><a href="#" class="card-refresh text-black"
                                                    data-toggle="refresh"><i class="card-icon card-icon-refresh"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h5 class="">Ongoing projects at <span class="semi-bold">pages</span></h5>
                                    <ul class="nav nav-tabs nav-tabs-simple m-b-20" role="tablist"
                                        data-init-reponsive-tabs="collapse">
                                        <li class="nav-item"><a href="#pending" class="active" data-toggle="tab"
                                                role="tab" aria-expanded="true">Pending</a>
                                        </li>
                                        <li class="nav-item"><a href="#completed" data-toggle="tab" role="tab"
                                                aria-expanded="false">Completed</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content no-padding">
                                        <div class="tab-pane active" id="pending">
                                            <div class="p-t-10">
                                                <div class="d-flex">
                                                    <span class="icon-thumbnail bg-contrast-low pull-left">kp</span>
                                                    <div class="flex-1 full-width overflow-ellipsis">
                                                        <p
                                                            class="hint-text all-caps font-montserrat fs-11 no-margin overflow-ellipsis ">
                                                            Revox Ltd
                                                        </p>
                                                        <h5 class="no-margin overflow-ellipsis ">Kepler - wordpress
                                                            builder</h5>
                                                    </div>
                                                </div>
                                                <div class="m-t-15">
                                                    <p class="hint-text small pull-left no-margin">71% completed from
                                                        total</p>
                                                    <a href="#" class="pull-right "><i
                                                            class="pg-icon">more_horizontal</i></a>
                                                    <div class="clearfix"></div>
                                                </div>
                                                <div class="progress progress-small m-b-15 m-t-10">
                                                    <!-- START BOOTSTRAP PROGRESS (http://getbootstrap.com/components/#progress) -->
                                                    <div class="progress-bar progress-bar-info" style="width:71%">
                                                    </div>
                                                    <!-- END BOOTSTRAP PROGRESS -->
                                                </div>
                                            </div>
                                            <div class="p-t-15">
                                                <div class="d-flex">
                                                    <span class="icon-thumbnail bg-warning-light pull-left ">cr</span>
                                                    <div class="flex-1 full-width overflow-ellipsis">
                                                        <p
                                                            class="hint-text all-caps font-montserrat fs-11 no-margin overflow-ellipsis ">
                                                            Nike Ltd
                                                        </p>
                                                        <h5 class="no-margin overflow-ellipsis ">Corporate rebranding
                                                        </h5>
                                                    </div>
                                                </div>
                                                <div class="m-t-15">
                                                    <p class="hint-text small pull-left no-margin">20% completed from
                                                        total</p>
                                                    <a href="#" class="pull-right "><i
                                                            class="pg-icon">more_horizontal</i></a>
                                                    <div class="clearfix"></div>
                                                </div>
                                                <div class="progress progress-small m-b-15 m-t-10">
                                                    <!-- START BOOTSTRAP PROGRESS (http://getbootstrap.com/components/#progress) -->
                                                    <div class="progress-bar progress-bar-warning" style="width:20%">
                                                    </div>
                                                    <!-- END BOOTSTRAP PROGRESS -->
                                                </div>
                                            </div>
                                            <a href="#" class="btn btn-block m-t-30">See all projects</a>
                                        </div>
                                        <div class="tab-pane" id="completed">
                                            <div class="p-t-10">
                                                <div class="d-flex">
                                                    <span class="icon-thumbnail bg-contrast-higher pull-left ">ws</span>
                                                    <div class="flex-1 full-width overflow-ellipsis">
                                                        <p
                                                            class="hint-text all-caps font-montserrat fs-11 no-margin overflow-ellipsis ">
                                                            Apple Corp
                                                        </p>
                                                        <h5 class="no-margin overflow-ellipsis ">Marketing Campaign for
                                                            revox</h5>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                                <div class="m-t-15">
                                                    <p class="hint-text  small pull-left no-margin">45% completed from
                                                        total</p>
                                                    <a href="#" class="pull-right "><i
                                                            class="pg-icon">more_horizontal</i></a>
                                                    <div class="clearfix"></div>
                                                </div>
                                                <div class="progress progress-small m-b-15 m-t-10">
                                                    <!-- START BOOTSTRAP PROGRESS (http://getbootstrap.com/components/#progress) -->
                                                    <div class="progress-bar progress-bar-info" style="width:45%">
                                                    </div>
                                                    <!-- END BOOTSTRAP PROGRESS -->
                                                </div>
                                            </div>
                                            <div class="p-t-15">
                                                <div class="d-flex">
                                                    <span class="icon-thumbnail bg-primary-light pull-left ">cr</span>
                                                    <div class="flex-1 full-width overflow-ellipsis">
                                                        <p
                                                            class="hint-text all-caps font-montserrat fs-11 no-margin overflow-ellipsis ">
                                                            Yahoo Inc
                                                        </p>
                                                        <h5 class="no-margin overflow-ellipsis ">Corporate rebranding
                                                        </h5>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                                <div class="m-t-15">
                                                    <p class="hint-text  small pull-left no-margin">20% completed from
                                                        total</p>
                                                    <a href="#" class="pull-right "><i
                                                            class="pg-icon">more_horizontal</i></a>
                                                    <div class="clearfix"></div>
                                                </div>
                                                <div class="progress progress-small m-b-15 m-t-10">
                                                    <!-- START BOOTSTRAP PROGRESS (http://getbootstrap.com/components/#progress) -->
                                                    <div class="progress-bar progress-bar-warning" style="width:20%">
                                                    </div>
                                                    <!-- END BOOTSTRAP PROGRESS -->
                                                </div>
                                            </div>
                                            <a href="#" class="btn btn-block m-t-30">See all projects</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END WIDGET -->
                        </div>
                        <div class="col-lg-8 sm-p-t-10">
                            <!-- START WIDGET widget_mapWidget-->
                            <div class="widget-13 card   no-margin widget-loader-circle">
                                <div class="card-header  pull-up top-right ">
                                    <div class="card-controls">
                                        <ul>
                                            <li><a href="#" class="card-refresh text-black"
                                                    data-toggle="refresh"><i class="card-icon card-icon-refresh"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="container-sm-height no-overflow">
                                    <div class="row row-sm-height">
                                        <div class="col-sm-5 col-lg-4 col-xlg-3 col-sm-height col-top no-padding">
                                            <div class="card-header  ">
                                                <div class="card-title">Geolocation
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <ul class="nav nav-pills m-t-10 m-b-15" role="tablist">
                                                    <li class="active">
                                                        <a href="#tab1" data-toggle="tab" role="tab"
                                                            class="b-a b-grey text-color">
                                                            fb
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#tab2" data-toggle="tab" role="tab"
                                                            class="b-a b-grey text-color">
                                                            gl
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#tab3" data-toggle="tab" role="tab"
                                                            class="b-a b-grey text-color">
                                                            am
                                                        </a>
                                                    </li>
                                                </ul>
                                                <div class="tab-content">
                                                    <div class="tab-pane active" id="tab1">
                                                        <h3 class="m-t-5 m-b-20">Facebook</h3>
                                                        <p class="hint-text all-caps font-montserrat small no-margin ">
                                                            Views</p>
                                                        <p class="all-caps font-montserrat  no-margin text-success ">
                                                            14,256</p>
                                                        <br>
                                                        <p class="hint-text all-caps font-montserrat small no-margin ">
                                                            Today</p>
                                                        <p class="all-caps font-montserrat  no-margin text-warning ">24
                                                        </p>
                                                        <br>
                                                        <p class="hint-text all-caps font-montserrat small no-margin ">
                                                            Week</p>
                                                        <p class="all-caps font-montserrat  no-margin text-success ">56
                                                        </p>
                                                    </div>
                                                    <div class="tab-pane " id="tab2">
                                                        <h3 class="m-t-5 m-b-20">Google</h3>
                                                        <p class="hint-text all-caps font-montserrat small no-margin ">
                                                            Views</p>
                                                        <p class="all-caps font-montserrat  no-margin text-success ">
                                                            14,256</p>
                                                        <br>
                                                        <p class="hint-text all-caps font-montserrat small no-margin ">
                                                            Today</p>
                                                        <p class="all-caps font-montserrat  no-margin text-warning ">24
                                                        </p>
                                                        <br>
                                                        <p class="hint-text all-caps font-montserrat small no-margin ">
                                                            Week</p>
                                                        <p class="all-caps font-montserrat  no-margin text-success ">56
                                                        </p>
                                                    </div>
                                                    <div class="tab-pane" id="tab3">
                                                        <h3 class="m-t-5 m-b-20">Amazon</h3>
                                                        <p class="hint-text all-caps font-montserrat small no-margin ">
                                                            Views</p>
                                                        <p class="all-caps font-montserrat  no-margin text-success ">
                                                            14,256</p>
                                                        <br>
                                                        <p class="hint-text all-caps font-montserrat small no-margin ">
                                                            Today</p>
                                                        <p class="all-caps font-montserrat  no-margin text-warning ">24
                                                        </p>
                                                        <br>
                                                        <p class="hint-text all-caps font-montserrat small no-margin ">
                                                            Week</p>
                                                        <p class="all-caps font-montserrat  no-margin text-success ">56
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="p-l-20 p-r-20 p-t-10 p-b-10 pull-bottom full-width hidden-xs">
                                                <p class="no-margin">
                                                    <a href="#" class="btn-circle-arrow b-grey"><i
                                                            class="pg-icon">chevron_down</i></a>
                                                    <span class="hint-text">Super secret options</span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-sm-7 col-lg-8 col-xlg-9 col-sm-height col-top no-padding relative">
                                            <div class="bg-success widget-13-map">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END WIDGET -->
                        </div>
                    </div>
                    <!-- END ROW -->
                </div>
                <!-- END CONTAINER FLUID -->
            </div>
            <!-- END PAGE CONTENT -->
            <!-- START COPYRIGHT -->
            <!-- START CONTAINER FLUID -->
            <!-- START CONTAINER FLUID -->

            <!-- END COPYRIGHT -->
        </div>
        <!-- END PAGE CONTENT WRAPPER -->
    </div>
    <!-- END PAGE CONTAINER -->
    <!--START QUICKVIEW -->
    <div id="quickview" class="quickview-wrapper" data-pages="quickview">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
            <li class="">
                <a href="#quickview-notes" data-target="#quickview-notes" data-toggle="tab" role="tab">Notes</a>
            </li>
            <li>
                <a href="#quickview-alerts" data-target="#quickview-alerts" data-toggle="tab" role="tab">Alerts</a>
            </li>
            <li class="">
                <a class="active" href="#quickview-chat" data-toggle="tab" role="tab">Chat</a>
            </li>
        </ul>
        <a class="btn-icon-link invert quickview-toggle" data-toggle-element="#quickview" data-toggle="quickview"><i
                class="pg-icon">close</i></a>
        <!-- Tab panes -->
        <div class="tab-content">
            <!-- BEGIN Notes !-->
            <div class="tab-pane no-padding" id="quickview-notes">
                <div class="view-port clearfix quickview-notes" id="note-views">
                    <!-- BEGIN Note List !-->
                    <div class="view list" id="quick-note-list">
                        <div class="toolbar clearfix">
                            <ul class="pull-right ">
                                <li>
                                    <a href="#" class="delete-note-link"><i class="pg-icon">trash_alt</i></a>
                                </li>
                                <li>
                                    <a href="#" class="new-note-link" data-navigate="view"
                                        data-view-port="#note-views" data-view-animation="push"><i
                                            class="pg-icon">add</i></a>
                                </li>
                            </ul>
                            <button aria-label="" class="btn-remove-notes btn btn-xs btn-block hide"><i
                                    class="pg-icon">close</i>Delete</button>
                        </div>
                        <ul>
                            <!-- BEGIN Note Item !-->
                            <li data-noteid="1" class="d-flex justify-space-between">
                                <div class="left">
                                    <!-- BEGIN Note Action !-->
                                    <div class="form-check warning no-margin">
                                        <input id="qncheckbox1" type="checkbox" value="1">
                                        <label for="qncheckbox1"></label>
                                    </div>
                                    <!-- END Note Action !-->
                                    <!-- BEGIN Note Preview Text !-->
                                    <p class="note-preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                        sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                                    <!-- BEGIN Note Preview Text !-->
                                </div>
                                <!-- BEGIN Note Details !-->
                                <div class="d-flex right justify-content-end">
                                    <!-- BEGIN Note Date !-->
                                    <span class="date">12/12/20</span>
                                    <a href="#" class="d-flex align-items-center" data-navigate="view"
                                        data-view-port="#note-views" data-view-animation="push">
                                        <i class="pg-icon">chevron_right</i>
                                    </a>
                                    <!-- END Note Date !-->
                                </div>
                                <!-- END Note Details !-->
                            </li>
                            <!-- END Note List !-->
                            <!-- BEGIN Note Item !-->
                            <li data-noteid="2" class="d-flex justify-space-between">
                                <div class="left">
                                    <!-- BEGIN Note Action !-->
                                    <div class="form-check warning no-margin">
                                        <input id="qncheckbox2" type="checkbox" value="1">
                                        <label for="qncheckbox2"></label>
                                    </div>
                                    <!-- END Note Action !-->
                                    <!-- BEGIN Note Preview Text !-->
                                    <p class="note-preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                        sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                                    <!-- BEGIN Note Preview Text !-->
                                </div>
                                <!-- BEGIN Note Details !-->
                                <div class="d-flex right justify-content-end">
                                    <!-- BEGIN Note Date !-->
                                    <span class="date">12/12/20</span>
                                    <a href="#" class="d-flex align-items-center" data-navigate="view"
                                        data-view-port="#note-views" data-view-animation="push"><i
                                            class="pg-icon">chevron_right</i></a>
                                    <!-- END Note Date !-->
                                </div>
                                <!-- END Note Details !-->
                            </li>
                            <!-- END Note List !-->
                            <!-- BEGIN Note Item !-->
                            <li data-noteid="2" class="d-flex justify-space-between">
                                <div class="left">
                                    <!-- BEGIN Note Action !-->
                                    <div class="form-check warning no-margin">
                                        <input id="qncheckbox3" type="checkbox" value="1">
                                        <label for="qncheckbox3"></label>
                                    </div>
                                    <!-- END Note Action !-->
                                    <!-- BEGIN Note Preview Text !-->
                                    <p class="note-preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                        sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                                    <!-- BEGIN Note Preview Text !-->
                                </div>
                                <!-- BEGIN Note Details !-->
                                <div class="d-flex right justify-content-end">
                                    <!-- BEGIN Note Date !-->
                                    <span class="date">12/12/20</span>
                                    <a href="#" class="d-flex align-items-center" data-navigate="view"
                                        data-view-port="#note-views" data-view-animation="push"><i
                                            class="pg-icon">chevron_right</i></a>
                                    <!-- END Note Date !-->
                                </div>
                                <!-- END Note Details !-->
                            </li>
                            <!-- END Note List !-->
                            <!-- BEGIN Note Item !-->
                            <li data-noteid="3" class="d-flex justify-space-between">
                                <div class="left">
                                    <!-- BEGIN Note Action !-->
                                    <div class="form-check warning no-margin">
                                        <input id="qncheckbox4" type="checkbox" value="1">
                                        <label for="qncheckbox4"></label>
                                    </div>
                                    <!-- END Note Action !-->
                                    <!-- BEGIN Note Preview Text !-->
                                    <p class="note-preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                        sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                                    <!-- BEGIN Note Preview Text !-->
                                </div>
                                <!-- BEGIN Note Details !-->
                                <div class="d-flex right justify-content-end">
                                    <!-- BEGIN Note Date !-->
                                    <span class="date">12/12/20</span>
                                    <a href="#" class="d-flex align-items-center" data-navigate="view"
                                        data-view-port="#note-views" data-view-animation="push"><i
                                            class="pg-icon">chevron_right</i></a>
                                    <!-- END Note Date !-->
                                </div>
                                <!-- END Note Details !-->
                            </li>
                            <!-- END Note List !-->
                            <!-- BEGIN Note Item !-->
                            <li data-noteid="4" class="d-flex justify-space-between">
                                <div class="left">
                                    <!-- BEGIN Note Action !-->
                                    <div class="form-check warning no-margin">
                                        <input id="qncheckbox5" type="checkbox" value="1">
                                        <label for="qncheckbox5"></label>
                                    </div>
                                    <!-- END Note Action !-->
                                    <!-- BEGIN Note Preview Text !-->
                                    <p class="note-preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                        sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                                    <!-- BEGIN Note Preview Text !-->
                                </div>
                                <!-- BEGIN Note Details !-->
                                <div class="d-flex right justify-content-end">
                                    <!-- BEGIN Note Date !-->
                                    <span class="date">12/12/20</span>
                                    <a href="#" class="d-flex align-items-center" data-navigate="view"
                                        data-view-port="#note-views" data-view-animation="push"><i
                                            class="pg-icon">chevron_right</i></a>
                                    <!-- END Note Date !-->
                                </div>
                                <!-- END Note Details !-->
                            </li>
                            <!-- END Note List !-->
                        </ul>
                    </div>
                    <!-- END Note List !-->
                    <div class="view note" id="quick-note">
                        <div>
                            <ul class="toolbar">
                                <li><a href="#" class="close-note-link"><i class="pg-icon">chevron_left</i></a>
                                </li>
                                <li><a href="#" data-action="Bold" class="fs-12"><i
                                            class="pg-icon">format_bold</i></a>
                                </li>
                                <li><a href="#" data-action="Italic" class="fs-12"><i
                                            class="pg-icon">format_italics</i></a>
                                </li>
                                <li><a href="#" class="fs-12"><i class="pg-icon">link</i></a>
                                </li>
                            </ul>
                            <div class="body">
                                <div>
                                    <div class="top">
                                        <span>21st april 2020 2:13am</span>
                                    </div>
                                    <div class="content">
                                        <div class="quick-note-editor full-width full-height js-input"
                                            contenteditable="true"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Notes !-->
            <!-- BEGIN Alerts !-->
            <div class="tab-pane no-padding" id="quickview-alerts">
                <div class="view-port clearfix" id="alerts">
                    <!-- BEGIN Alerts View !-->
                    <div class="view bg-white">
                        <!-- BEGIN View Header !-->
                        <div class="navbar navbar-default navbar-sm">
                            <div class="navbar-inner">
                                <!-- BEGIN Header Controler !-->
                                <a href="javascript:;" class="action p-l-10 link text-color" data-navigate="view"
                                    data-view-port="#chat" data-view-animation="push-parrallax">
                                    <i class="pg-icon">more_horizontal</i>
                                </a>
                                <!-- END Header Controler !-->
                                <div class="view-heading">
                                    Notications
                                </div>
                                <!-- BEGIN Header Controler !-->
                                <a href="#" class="action p-r-10 pull-right link text-color">
                                    <i class="pg-icon">search</i>
                                </a>
                                <!-- END Header Controler !-->
                            </div>
                        </div>
                        <!-- END View Header !-->
                        <!-- BEGIN Alert List !-->
                        <div data-init-list-view="ioslist" class="list-view boreded no-top-border">
                            <!-- BEGIN List Group !-->
                            <div class="list-view-group-container">
                                <!-- BEGIN List Group Header!-->
                                <div class="list-view-group-header text-uppercase">
                                    Calendar
                                </div>
                                <!-- END List Group Header!-->
                                <ul>
                                    <!-- BEGIN List Group Item!-->
                                    <li class="alert-list">
                                        <!-- BEGIN Alert Item Set Animation using data-view-animation !-->
                                        <a href="javascript:;" class="align-items-center" data-navigate="view"
                                            data-view-port="#chat" data-view-animation="push-parrallax">
                                            <p class="">
                                                <span class="text-warning fs-10"><i class="pg-icon">circle_fill</i></span>
                                            </p>
                                            <p class="p-l-10 overflow-ellipsis fs-12">
                                                <span class="text-color">David Nester Birthday</span>
                                            </p>
                                            <p class="p-r-10 ml-auto fs-12 text-right">
                                                <span class="text-warning">Today <br></span>
                                                <span class="text-color">All Day</span>
                                            </p>
                                        </a>
                                        <!-- END Alert Item!-->
                                        <!-- BEGIN List Group Item!-->
                                    </li>
                                    <!-- END List Group Item!-->
                                    <!-- BEGIN List Group Item!-->
                                    <li class="alert-list">
                                        <!-- BEGIN Alert Item Set Animation using data-view-animation !-->
                                        <a href="#" class="align-items-center" data-navigate="view"
                                            data-view-port="#chat" data-view-animation="push-parrallax">
                                            <p class="">
                                                <span class="text-warning fs-10"><i class="pg-icon">circle_fill</i></span>
                                            </p>
                                            <p class="p-l-10 overflow-ellipsis fs-12">
                                                <span class="text-color">Meeting at 2:30</span>
                                            </p>
                                            <p class="p-r-10 ml-auto fs-12 text-right">
                                                <span class="text-warning">Today</span>
                                            </p>
                                        </a>
                                        <!-- END Alert Item!-->
                                    </li>
                                    <!-- END List Group Item!-->
                                </ul>
                            </div>
                            <!-- END List Group !-->
                            <div class="list-view-group-container">
                                <!-- BEGIN List Group Header!-->
                                <div class="list-view-group-header text-uppercase">
                                    Social
                                </div>
                                <!-- END List Group Header!-->
                                <ul>
                                    <!-- BEGIN List Group Item!-->
                                    <li class="alert-list">
                                        <!-- BEGIN Alert Item Set Animation using data-view-animation !-->
                                        <a href="javascript:;" class="p-t-10 p-b-10 align-items-center"
                                            data-navigate="view" data-view-port="#chat"
                                            data-view-animation="push-parrallax">
                                            <p class="">
                                                <span class="text-complete fs-10"><i
                                                        class="pg-icon">circle_fill</i></span>
                                            </p>
                                            <p class="col overflow-ellipsis fs-12 p-l-10">
                                                <span class="text-color link">Jame Smith commented on your
                                                    status<br></span>
                                                <span class="text-color">“Perfection Simplified - Company Revox"</span>
                                            </p>
                                        </a>
                                        <!-- END Alert Item!-->
                                    </li>
                                    <!-- END List Group Item!-->
                                    <!-- BEGIN List Group Item!-->
                                    <li class="alert-list">
                                        <!-- BEGIN Alert Item Set Animation using data-view-animation !-->
                                        <a href="javascript:;" class="p-t-10 p-b-10 align-items-center"
                                            data-navigate="view" data-view-port="#chat"
                                            data-view-animation="push-parrallax">
                                            <p class="">
                                                <span class="text-complete fs-10"><i
                                                        class="pg-icon">circle_fill</i></span>
                                            </p>
                                            <p class="col overflow-ellipsis fs-12 p-l-10">
                                                <span class="text-color link">Jame Smith commented on your
                                                    status<br></span>
                                                <span class="text-color">“Perfection Simplified - Company Revox"</span>
                                            </p>
                                        </a>
                                        <!-- END Alert Item!-->
                                    </li>
                                    <!-- END List Group Item!-->
                                </ul>
                            </div>
                            <div class="list-view-group-container">
                                <!-- BEGIN List Group Header!-->
                                <div class="list-view-group-header text-uppercase">
                                    Sever Status
                                </div>
                                <!-- END List Group Header!-->
                                <ul>
                                    <!-- BEGIN List Group Item!-->
                                    <li class="alert-list">
                                        <!-- BEGIN Alert Item Set Animation using data-view-animation !-->
                                        <a href="#" class="p-t-10 p-b-10 align-items-center" data-navigate="view"
                                            data-view-port="#chat" data-view-animation="push-parrallax">
                                            <p class="">
                                                <span class="text-danger fs-10"><i class="pg-icon">circle_fill</i></span>
                                            </p>
                                            <p class="col overflow-ellipsis fs-12 p-l-10">
                                                <span class="text-color link">12:13AM GTM, 10230, ID:WR174s<br></span>
                                                <span class="text-color">Server Load Exceeted. Take action</span>
                                            </p>
                                        </a>
                                        <!-- END Alert Item!-->
                                    </li>
                                    <!-- END List Group Item!-->
                                </ul>
                            </div>
                        </div>
                        <!-- END Alert List !-->
                    </div>
                    <!-- EEND Alerts View !-->
                </div>
            </div>
            <!-- END Alerts !-->
            <div class="tab-pane active no-padding" id="quickview-chat">
                <div class="view-port clearfix" id="chat">
                    <div class="view bg-white">
                        <!-- BEGIN View Header !-->
                        <div class="navbar navbar-default">
                            <div class="navbar-inner">
                                <!-- BEGIN Header Controler !-->
                                <a href="javascript:;" class="action p-l-10 link text-color" data-navigate="view"
                                    data-view-port="#chat" data-view-animation="push-parrallax">
                                    <i class="pg-icon">add</i>
                                </a>
                                <!-- END Header Controler !-->
                                <div class="view-heading">
                                    Chat List
                                    <div class="fs-11">Show All</div>
                                </div>
                                <!-- BEGIN Header Controler !-->
                                <a href="#" class="action p-r-10 pull-right link text-color">
                                    <i class="pg-icon">more_horizontal</i>
                                </a>
                                <!-- END Header Controler !-->
                            </div>
                        </div>
                        <!-- END View Header !-->
                        <div data-init-list-view="ioslist" class="list-view boreded no-top-border">
                            <div class="list-view-group-container">
                                <div class="list-view-group-header text-uppercase">
                                    a</div>
                                <ul>
                                    <!-- BEGIN Chat User List Item  !-->
                                    <li class="chat-user-list clearfix">
                                        <a data-view-animation="push-parrallax" data-view-port="#chat"
                                            data-navigate="view" class="" href="#">
                                            <span class="thumbnail-wrapper d32 circular bg-success">
                                                <img width="34" height="34" alt=""
                                                    data-src-retina="{{ asset('themes/page/assets/img/profiles/1x.jpg') }}"
                                                    data-src="{{ asset('themes/page/assets/img/profiles/1.jpg') }}"
                                                    src="{{ asset('themes/page/assets/img/profiles/1x.jpg') }}"
                                                    class="col-top">
                                            </span>
                                            <p class="p-l-10 ">
                                                <span class="text-color">ava flores</span>
                                                <span class="block text-color hint-text fs-12">Hello there</span>
                                            </p>
                                        </a>
                                    </li>
                                    <!-- END Chat User List Item  !-->
                                </ul>
                            </div>
                            <div class="list-view-group-container">
                                <div class="list-view-group-header text-uppercase">b</div>
                                <ul>
                                    <!-- BEGIN Chat User List Item  !-->
                                    <li class="chat-user-list clearfix">
                                        <a data-view-animation="push-parrallax" data-view-port="#chat"
                                            data-navigate="view" class="" href="#">
                                            <span class="thumbnail-wrapper d32 circular bg-success">
                                                <img width="34" height="34" alt=""
                                                    data-src-retina="{{ asset('themes/page/assets/img/profiles/2x.jpg') }}"
                                                    data-src="{{ asset('themes/page/assets/img/profiles/2.jpg') }}"
                                                    src="{{ asset('themes/page/assets/img/profiles/2x.jpg') }}"
                                                    class="col-top">
                                            </span>
                                            <p class="p-l-10 ">
                                                <span class="text-color">bella mccoy</span>
                                                <span class="block text-color hint-text fs-12">Hello there</span>
                                            </p>
                                        </a>
                                    </li>
                                    <!-- END Chat User List Item  !-->
                                    <!-- BEGIN Chat User List Item  !-->
                                    <li class="chat-user-list clearfix">
                                        <a data-view-animation="push-parrallax" data-view-port="#chat"
                                            data-navigate="view" class="" href="#">
                                            <span class="thumbnail-wrapper d32 circular bg-success">
                                                <img width="34" height="34" alt=""
                                                    data-src-retina="{{ asset('themes/page/assets/img/profiles/3x.jpg') }}"
                                                    data-src="{{ asset('themes/page/assets/img/profiles/3.jpg') }}"
                                                    src="{{ asset('themes/page/assets/img/profiles/3x.jpg') }}"
                                                    class="col-top">
                                            </span>
                                            <p class="p-l-10 ">
                                                <span class="text-color">bob stephens</span>
                                                <span class="block text-color hint-text fs-12">Hello there</span>
                                            </p>
                                        </a>
                                    </li>
                                    <!-- END Chat User List Item  !-->
                                </ul>
                            </div>
                            <div class="list-view-group-container">
                                <div class="list-view-group-header text-uppercase">c</div>
                                <ul>
                                    <!-- BEGIN Chat User List Item  !-->
                                    <li class="chat-user-list clearfix">
                                        <a data-view-animation="push-parrallax" data-view-port="#chat"
                                            data-navigate="view" class="" href="#">
                                            <span class="thumbnail-wrapper d32 circular bg-success">
                                                <img width="34" height="34" alt=""
                                                    data-src-retina="{{ asset('themes/page/assets/img/profiles/4x.jpg') }}"
                                                    data-src="{{ asset('themes/page/assets/img/profiles/4.jpg') }}"
                                                    src="{{ asset('themes/page/assets/img/profiles/4x.jpg') }}"
                                                    class="col-top">
                                            </span>
                                            <p class="p-l-10 ">
                                                <span class="text-color">carole roberts</span>
                                                <span class="block text-color hint-text fs-12">Hello there</span>
                                            </p>
                                        </a>
                                    </li>
                                    <!-- END Chat User List Item  !-->
                                    <!-- BEGIN Chat User List Item  !-->
                                    <li class="chat-user-list clearfix">
                                        <a data-view-animation="push-parrallax" data-view-port="#chat"
                                            data-navigate="view" class="" href="#">
                                            <span class="thumbnail-wrapper d32 circular bg-success">
                                                <img width="34" height="34" alt=""
                                                    data-src-retina="{{ asset('themes/page/assets/img/profiles/5x.jpg') }}"
                                                    data-src="{{ asset('themes/page/assets/img/profiles/5.jpg') }}"
                                                    src="{{ asset('themes/page/assets/img/profiles/5x.jpg') }}"
                                                    class="col-top">
                                            </span>
                                            <p class="p-l-10 ">
                                                <span class="text-color">christopher perez</span>
                                                <span class="block text-color hint-text fs-12">Hello there</span>
                                            </p>
                                        </a>
                                    </li>
                                    <!-- END Chat User List Item  !-->
                                </ul>
                            </div>
                            <div class="list-view-group-container">
                                <div class="list-view-group-header text-uppercase">d</div>
                                <ul>
                                    <!-- BEGIN Chat User List Item  !-->
                                    <li class="chat-user-list clearfix">
                                        <a data-view-animation="push-parrallax" data-view-port="#chat"
                                            data-navigate="view" class="" href="#">
                                            <span class="thumbnail-wrapper d32 circular bg-success">
                                                <img width="34" height="34" alt=""
                                                    data-src-retina="{{ asset('themes/page/assets/img/profiles/6x.jpg') }}"
                                                    data-src="{{ asset('themes/page/assets/img/profiles/6.jpg') }}"
                                                    src="{{ asset('themes/page/assets/img/profiles/6x.jpg') }}"
                                                    class="col-top">
                                            </span>
                                            <p class="p-l-10 ">
                                                <span class="text-color">danielle fletcher</span>
                                                <span class="block text-color hint-text fs-12">Hello there</span>
                                            </p>
                                        </a>
                                    </li>
                                    <!-- END Chat User List Item  !-->
                                    <!-- BEGIN Chat User List Item  !-->
                                    <li class="chat-user-list clearfix">
                                        <a data-view-animation="push-parrallax" data-view-port="#chat"
                                            data-navigate="view" class="" href="#">
                                            <span class="thumbnail-wrapper d32 circular bg-success">
                                                <img width="34" height="34" alt=""
                                                    data-src-retina="{{ asset('themes/page/assets/img/profiles/7x.jpg') }}"
                                                    data-src="{{ asset('themes/page/assets/img/profiles/7.jpg') }}"
                                                    src="{{ asset('themes/page/assets/img/profiles/7x.jpg') }}"
                                                    class="col-top">
                                            </span>
                                            <p class="p-l-10 ">
                                                <span class="text-color">david sutton</span>
                                                <span class="block text-color hint-text fs-12">Hello there</span>
                                            </p>
                                        </a>
                                    </li>
                                    <!-- END Chat User List Item  !-->
                                </ul>
                            </div>
                            <div class="list-view-group-container">
                                <div class="list-view-group-header text-uppercase">e</div>
                                <ul>
                                    <!-- BEGIN Chat User List Item  !-->
                                    <li class="chat-user-list clearfix">
                                        <a data-view-animation="push-parrallax" data-view-port="#chat"
                                            data-navigate="view" class="" href="#">
                                            <span class="thumbnail-wrapper d32 circular bg-success">
                                                <img width="34" height="34" alt=""
                                                    data-src-retina="{{ asset('themes/page/assets/img/profiles/8x.jpg') }}"
                                                    data-src="{{ asset('themes/page/assets/img/profiles/8.jpg') }}"
                                                    src="{{ asset('themes/page/assets/img/profiles/8x.jpg') }}"
                                                    class="col-top">
                                            </span>
                                            <p class="p-l-10 ">
                                                <span class="text-color">earl hamilton</span>
                                                <span class="block text-color hint-text fs-12">Hello there</span>
                                            </p>
                                        </a>
                                    </li>
                                    <!-- END Chat User List Item  !-->
                                    <!-- BEGIN Chat User List Item  !-->
                                    <li class="chat-user-list clearfix">
                                        <a data-view-animation="push-parrallax" data-view-port="#chat"
                                            data-navigate="view" class="" href="#">
                                            <span class="thumbnail-wrapper d32 circular bg-success">
                                                <img width="34" height="34" alt=""
                                                    data-src-retina="{{ asset('themes/page/assets/img/profiles/9x.jpg') }}"
                                                    data-src="{{ asset('themes/page/assets/img/profiles/9.jpg') }}"
                                                    src="{{ asset('themes/page/assets/img/profiles/9x.jpg') }}"
                                                    class="col-top">
                                            </span>
                                            <p class="p-l-10 ">
                                                <span class="text-color">elaine lawrence</span>
                                                <span class="block text-color hint-text fs-12">Hello there</span>
                                            </p>
                                        </a>
                                    </li>
                                    <!-- END Chat User List Item  !-->
                                    <!-- BEGIN Chat User List Item  !-->
                                    <li class="chat-user-list clearfix">
                                        <a data-view-animation="push-parrallax" data-view-port="#chat"
                                            data-navigate="view" class="" href="#">
                                            <span class="thumbnail-wrapper d32 circular bg-success">
                                                <img width="34" height="34" alt=""
                                                    data-src-retina="{{ asset('themes/page/assets/img/profiles/1x.jpg') }}"
                                                    data-src="{{ asset('themes/page/assets/img/profiles/1.jpg') }}"
                                                    src="{{ asset('themes/page/assets/img/profiles/1x.jpg') }}"
                                                    class="col-top">
                                            </span>
                                            <p class="p-l-10 ">
                                                <span class="text-color">ellen grant</span>
                                                <span class="block text-color hint-text fs-12">Hello there</span>
                                            </p>
                                        </a>
                                    </li>
                                    <!-- END Chat User List Item  !-->
                                    <!-- BEGIN Chat User List Item  !-->
                                    <li class="chat-user-list clearfix">
                                        <a data-view-animation="push-parrallax" data-view-port="#chat"
                                            data-navigate="view" class="" href="#">
                                            <span class="thumbnail-wrapper d32 circular bg-success">
                                                <img width="34" height="34" alt=""
                                                    data-src-retina="{{ asset('themes/page/assets/img/profiles/2x.jpg') }}"
                                                    data-src="{{ asset('themes/page/assets/img/profiles/2.jpg') }}"
                                                    src="{{ asset('themes/page/assets/img/profiles/2x.jpg') }}"
                                                    class="col-top">
                                            </span>
                                            <p class="p-l-10 ">
                                                <span class="text-color">erik taylor</span>
                                                <span class="block text-color hint-text fs-12">Hello there</span>
                                            </p>
                                        </a>
                                    </li>
                                    <!-- END Chat User List Item  !-->
                                    <!-- BEGIN Chat User List Item  !-->
                                    <li class="chat-user-list clearfix">
                                        <a data-view-animation="push-parrallax" data-view-port="#chat"
                                            data-navigate="view" class="" href="#">
                                            <span class="thumbnail-wrapper d32 circular bg-success">
                                                <img width="34" height="34" alt=""
                                                    data-src-retina="{{ asset('themes/page/assets/img/profiles/3x.jpg') }}"
                                                    data-src="{{ asset('themes/page/assets/img/profiles/3.jpg') }}"
                                                    src="{{ asset('themes/page/assets/img/profiles/3x.jpg') }}"
                                                    class="col-top">
                                            </span>
                                            <p class="p-l-10 ">
                                                <span class="text-color">everett wagner</span>
                                                <span class="block text-color hint-text fs-12">Hello there</span>
                                            </p>
                                        </a>
                                    </li>
                                    <!-- END Chat User List Item  !-->
                                </ul>
                            </div>
                            <div class="list-view-group-container">
                                <div class="list-view-group-header text-uppercase">f</div>
                                <ul>
                                    <!-- BEGIN Chat User List Item  !-->
                                    <li class="chat-user-list clearfix">
                                        <a data-view-animation="push-parrallax" data-view-port="#chat"
                                            data-navigate="view" class="" href="#">
                                            <span class="thumbnail-wrapper d32 circular bg-success">
                                                <img width="34" height="34" alt=""
                                                    data-src-retina="{{ asset('themes/page/assets/img/profiles/4x.jpg') }}"
                                                    data-src="{{ asset('themes/page/assets/img/profiles/4.jpg') }}"
                                                    src="{{ asset('themes/page/assets/img/profiles/4x.jpg') }}"
                                                    class="col-top">
                                            </span>
                                            <p class="p-l-10 ">
                                                <span class="text-color">freddie gomez</span>
                                                <span class="block text-color hint-text fs-12">Hello there</span>
                                            </p>
                                        </a>
                                    </li>
                                    <!-- END Chat User List Item  !-->
                                </ul>
                            </div>
                            <div class="list-view-group-container">
                                <div class="list-view-group-header text-uppercase">g</div>
                                <ul>
                                    <!-- BEGIN Chat User List Item  !-->
                                    <li class="chat-user-list clearfix">
                                        <a data-view-animation="push-parrallax" data-view-port="#chat"
                                            data-navigate="view" class="" href="#">
                                            <span class="thumbnail-wrapper d32 circular bg-success">
                                                <img width="34" height="34" alt=""
                                                    data-src-retina="{{ asset('themes/page/assets/img/profiles/5x.jpg') }}"
                                                    data-src="{{ asset('themes/page/assets/img/profiles/5.jpg') }}"
                                                    src="{{ asset('themes/page/assets/img/profiles/5x.jpg') }}"
                                                    class="col-top">
                                            </span>
                                            <p class="p-l-10 ">
                                                <span class="text-color">glen jensen</span>
                                                <span class="block text-color hint-text fs-12">Hello there</span>
                                            </p>
                                        </a>
                                    </li>
                                    <!-- END Chat User List Item  !-->
                                    <!-- BEGIN Chat User List Item  !-->
                                    <li class="chat-user-list clearfix">
                                        <a data-view-animation="push-parrallax" data-view-port="#chat"
                                            data-navigate="view" class="" href="#">
                                            <span class="thumbnail-wrapper d32 circular bg-success">
                                                <img width="34" height="34" alt=""
                                                    data-src-retina="{{ asset('themes/page/assets/img/profiles/6x.jpg') }}"
                                                    data-src="{{ asset('themes/page/assets/img/profiles/6.jpg') }}"
                                                    src="{{ asset('themes/page/assets/img/profiles/6x.jpg') }}"
                                                    class="col-top">
                                            </span>
                                            <p class="p-l-10 ">
                                                <span class="text-color">gwendolyn walker</span>
                                                <span class="block text-color hint-text fs-12">Hello there</span>
                                            </p>
                                        </a>
                                    </li>
                                    <!-- END Chat User List Item  !-->
                                </ul>
                            </div>
                            <div class="list-view-group-container">
                                <div class="list-view-group-header text-uppercase">j</div>
                                <ul>
                                    <!-- BEGIN Chat User List Item  !-->
                                    <li class="chat-user-list clearfix">
                                        <a data-view-animation="push-parrallax" data-view-port="#chat"
                                            data-navigate="view" class="" href="#">
                                            <span class="thumbnail-wrapper d32 circular bg-success">
                                                <img width="34" height="34" alt=""
                                                    data-src-retina="{{ asset('themes/page/assets/img/profiles/7x.jpg') }}"
                                                    data-src="{{ asset('themes/page/assets/img/profiles/7.jpg') }}"
                                                    src="{{ asset('themes/page/assets/img/profiles/7x.jpg') }}"
                                                    class="col-top">
                                            </span>
                                            <p class="p-l-10 ">
                                                <span class="text-color">janet romero</span>
                                                <span class="block text-color hint-text fs-12">Hello there</span>
                                            </p>
                                        </a>
                                    </li>
                                    <!-- END Chat User List Item  !-->
                                </ul>
                            </div>
                            <div class="list-view-group-container">
                                <div class="list-view-group-header text-uppercase">k</div>
                                <ul>
                                    <!-- BEGIN Chat User List Item  !-->
                                    <li class="chat-user-list clearfix">
                                        <a data-view-animation="push-parrallax" data-view-port="#chat"
                                            data-navigate="view" class="" href="#">
                                            <span class="thumbnail-wrapper d32 circular bg-success">
                                                <img width="34" height="34" alt=""
                                                    data-src-retina="{{ asset('themes/page/assets/img/profiles/8x.jpg') }}"
                                                    data-src="{{ asset('themes/page/assets/img/profiles/8.jpg') }}"
                                                    src="{{ asset('themes/page/assets/img/profiles/8x.jpg') }}"
                                                    class="col-top">
                                            </span>
                                            <p class="p-l-10 ">
                                                <span class="text-color">kim martinez</span>
                                                <span class="block text-color hint-text fs-12">Hello there</span>
                                            </p>
                                        </a>
                                    </li>
                                    <!-- END Chat User List Item  !-->
                                </ul>
                            </div>
                            <div class="list-view-group-container">
                                <div class="list-view-group-header text-uppercase">l</div>
                                <ul>
                                    <!-- BEGIN Chat User List Item  !-->
                                    <li class="chat-user-list clearfix">
                                        <a data-view-animation="push-parrallax" data-view-port="#chat"
                                            data-navigate="view" class="" href="#">
                                            <span class="thumbnail-wrapper d32 circular bg-success">
                                                <img width="34" height="34" alt=""
                                                    data-src-retina="{{ asset('themes/page/assets/img/profiles/9x.jpg') }}"
                                                    data-src="{{ asset('themes/page/assets/img/profiles/9.jpg') }}"
                                                    src="{{ asset('themes/page/assets/img/profiles/9x.jpg') }}"
                                                    class="col-top">
                                            </span>
                                            <p class="p-l-10 ">
                                                <span class="text-color">lawrence white</span>
                                                <span class="block text-color hint-text fs-12">Hello there</span>
                                            </p>
                                        </a>
                                    </li>
                                    <!-- END Chat User List Item  !-->
                                    <!-- BEGIN Chat User List Item  !-->
                                    <li class="chat-user-list clearfix">
                                        <a data-view-animation="push-parrallax" data-view-port="#chat"
                                            data-navigate="view" class="" href="#">
                                            <span class="thumbnail-wrapper d32 circular bg-success">
                                                <img width="34" height="34" alt=""
                                                    data-src-retina="{{ asset('themes/page/assets/img/profiles/1x.jpg') }}"
                                                    data-src="{{ asset('themes/page/assets/img/profiles/1.jpg') }}"
                                                    src="{{ asset('themes/page/assets/img/profiles/1x.jpg') }}"
                                                    class="col-top">
                                            </span>
                                            <p class="p-l-10 ">
                                                <span class="text-color">leroy bell</span>
                                                <span class="block text-color hint-text fs-12">Hello there</span>
                                            </p>
                                        </a>
                                    </li>
                                    <!-- END Chat User List Item  !-->
                                    <!-- BEGIN Chat User List Item  !-->
                                    <li class="chat-user-list clearfix">
                                        <a data-view-animation="push-parrallax" data-view-port="#chat"
                                            data-navigate="view" class="" href="#">
                                            <span class="thumbnail-wrapper d32 circular bg-success">
                                                <img width="34" height="34" alt=""
                                                    data-src-retina="{{ asset('themes/page/assets/img/profiles/2x.jpg') }}"
                                                    data-src="{{ asset('themes/page/assets/img/profiles/2.jpg') }}"
                                                    src="{{ asset('themes/page/assets/img/profiles/2x.jpg') }}"
                                                    class="col-top">
                                            </span>
                                            <p class="p-l-10 ">
                                                <span class="text-color">letitia carr</span>
                                                <span class="block text-color hint-text fs-12">Hello there</span>
                                            </p>
                                        </a>
                                    </li>
                                    <!-- END Chat User List Item  !-->
                                    <!-- BEGIN Chat User List Item  !-->
                                    <li class="chat-user-list clearfix">
                                        <a data-view-animation="push-parrallax" data-view-port="#chat"
                                            data-navigate="view" class="" href="#">
                                            <span class="thumbnail-wrapper d32 circular bg-success">
                                                <img width="34" height="34" alt=""
                                                    data-src-retina="{{ asset('themes/page/assets/img/profiles/3x.jpg') }}"
                                                    data-src="{{ asset('themes/page/assets/img/profiles/3.jpg') }}"
                                                    src="{{ asset('themes/page/assets/img/profiles/3x.jpg') }}"
                                                    class="col-top">
                                            </span>
                                            <p class="p-l-10 ">
                                                <span class="text-color">lucy castro</span>
                                                <span class="block text-color hint-text fs-12">Hello there</span>
                                            </p>
                                        </a>
                                    </li>
                                    <!-- END Chat User List Item  !-->
                                </ul>
                            </div>
                            <div class="list-view-group-container">
                                <div class="list-view-group-header text-uppercase">m</div>
                                <ul>
                                    <!-- BEGIN Chat User List Item  !-->
                                    <li class="chat-user-list clearfix">
                                        <a data-view-animation="push-parrallax" data-view-port="#chat"
                                            data-navigate="view" class="" href="#">
                                            <span class="thumbnail-wrapper d32 circular bg-success">
                                                <img width="34" height="34" alt=""
                                                    data-src-retina="{{ asset('themes/page/assets/img/profiles/4x.jpg') }}"
                                                    data-src="{{ asset('themes/page/assets/img/profiles/4.jpg') }}"
                                                    src="{{ asset('themes/page/assets/img/profiles/4x.jpg') }}"
                                                    class="col-top">
                                            </span>
                                            <p class="p-l-10 ">
                                                <span class="text-color">mae hayes</span>
                                                <span class="block text-color hint-text fs-12">Hello there</span>
                                            </p>
                                        </a>
                                    </li>
                                    <!-- END Chat User List Item  !-->
                                    <!-- BEGIN Chat User List Item  !-->
                                    <li class="chat-user-list clearfix">
                                        <a data-view-animation="push-parrallax" data-view-port="#chat"
                                            data-navigate="view" class="" href="#">
                                            <span class="thumbnail-wrapper d32 circular bg-success">
                                                <img width="34" height="34" alt=""
                                                    data-src-retina="{{ asset('themes/page/assets/img/profiles/5x.jpg') }}"
                                                    data-src="{{ asset('themes/page/assets/img/profiles/5.jpg') }}"
                                                    src="{{ asset('themes/page/assets/img/profiles/5x.jpg') }}"
                                                    class="col-top">
                                            </span>
                                            <p class="p-l-10 ">
                                                <span class="text-color">marilyn owens</span>
                                                <span class="block text-color hint-text fs-12">Hello there</span>
                                            </p>
                                        </a>
                                    </li>
                                    <!-- END Chat User List Item  !-->
                                    <!-- BEGIN Chat User List Item  !-->
                                    <li class="chat-user-list clearfix">
                                        <a data-view-animation="push-parrallax" data-view-port="#chat"
                                            data-navigate="view" class="" href="#">
                                            <span class="thumbnail-wrapper d32 circular bg-success">
                                                <img width="34" height="34" alt=""
                                                    data-src-retina="{{ asset('themes/page/assets/img/profiles/6x.jpg') }}"
                                                    data-src="{{ asset('themes/page/assets/img/profiles/6.jpg') }}"
                                                    src="{{ asset('themes/page/assets/img/profiles/6x.jpg') }}"
                                                    class="col-top">
                                            </span>
                                            <p class="p-l-10 ">
                                                <span class="text-color">marlene cole</span>
                                                <span class="block text-color hint-text fs-12">Hello there</span>
                                            </p>
                                        </a>
                                    </li>
                                    <!-- END Chat User List Item  !-->
                                    <!-- BEGIN Chat User List Item  !-->
                                    <li class="chat-user-list clearfix">
                                        <a data-view-animation="push-parrallax" data-view-port="#chat"
                                            data-navigate="view" class="" href="#">
                                            <span class="thumbnail-wrapper d32 circular bg-success">
                                                <img width="34" height="34" alt=""
                                                    data-src-retina="{{ asset('themes/page/assets/img/profiles/7x.jpg') }}"
                                                    data-src="{{ asset('themes/page/assets/img/profiles/7.jpg') }}"
                                                    src="{{ asset('themes/page/assets/img/profiles/7x.jpg') }}"
                                                    class="col-top">
                                            </span>
                                            <p class="p-l-10 ">
                                                <span class="text-color">marsha warren</span>
                                                <span class="block text-color hint-text fs-12">Hello there</span>
                                            </p>
                                        </a>
                                    </li>
                                    <!-- END Chat User List Item  !-->
                                    <!-- BEGIN Chat User List Item  !-->
                                    <li class="chat-user-list clearfix">
                                        <a data-view-animation="push-parrallax" data-view-port="#chat"
                                            data-navigate="view" class="" href="#">
                                            <span class="thumbnail-wrapper d32 circular bg-success">
                                                <img width="34" height="34" alt=""
                                                    data-src-retina="{{ asset('themes/page/assets/img/profiles/8x.jpg') }}"
                                                    data-src="{{ asset('themes/page/assets/img/profiles/8.jpg') }}"
                                                    src="{{ asset('themes/page/assets/img/profiles/8x.jpg') }}"
                                                    class="col-top">
                                            </span>
                                            <p class="p-l-10 ">
                                                <span class="text-color">marsha dean</span>
                                                <span class="block text-color hint-text fs-12">Hello there</span>
                                            </p>
                                        </a>
                                    </li>
                                    <!-- END Chat User List Item  !-->
                                    <!-- BEGIN Chat User List Item  !-->
                                    <li class="chat-user-list clearfix">
                                        <a data-view-animation="push-parrallax" data-view-port="#chat"
                                            data-navigate="view" class="" href="#">
                                            <span class="thumbnail-wrapper d32 circular bg-success">
                                                <img width="34" height="34" alt=""
                                                    data-src-retina="{{ asset('themes/page/assets/img/profiles/9x.jpg') }}"
                                                    data-src="{{ asset('themes/page/assets/img/profiles/9.jpg') }}"
                                                    src="{{ asset('themes/page/assets/img/profiles/9x.jpg') }}"
                                                    class="col-top">
                                            </span>
                                            <p class="p-l-10 ">
                                                <span class="text-color">mia diaz</span>
                                                <span class="block text-color hint-text fs-12">Hello there</span>
                                            </p>
                                        </a>
                                    </li>
                                    <!-- END Chat User List Item  !-->
                                </ul>
                            </div>
                            <div class="list-view-group-container">
                                <div class="list-view-group-header text-uppercase">n</div>
                                <ul>
                                    <!-- BEGIN Chat User List Item  !-->
                                    <!-- BEGIN Chat User List Item  !-->
                                    <li class="chat-user-list clearfix">
                                        <a data-view-animation="push-parrallax" data-view-port="#chat"
                                            data-navigate="view" class="" href="#">
                                            <span class="thumbnail-wrapper d32 circular bg-success">
                                                <img width="34" height="34" alt=""
                                                    data-src-retina="{{ asset('themes/page/assets/img/profiles/1x.jpg') }}"
                                                    data-src="{{ asset('themes/page/assets/img/profiles/1.jpg') }}"
                                                    src="{{ asset('themes/page/assets/img/profiles/1x.jpg') }}"
                                                    class="col-top">
                                            </span>
                                            <p class="p-l-10 ">
                                                <span class="text-color">noah elliott</span>
                                                <span class="block text-color hint-text fs-12">Hello there</span>
                                            </p>
                                        </a>
                                    </li>
                                    <!-- END Chat User List Item  !-->
                                </ul>
                            </div>
                            <div class="list-view-group-container">
                                <div class="list-view-group-header text-uppercase">p</div>
                                <ul>
                                    <!-- BEGIN Chat User List Item  !-->
                                    <li class="chat-user-list clearfix">
                                        <a data-view-animation="push-parrallax" data-view-port="#chat"
                                            data-navigate="view" class="" href="#">
                                            <span class="thumbnail-wrapper d32 circular bg-success">
                                                <img width="34" height="34" alt=""
                                                    data-src-retina="{{ asset('themes/page/assets/img/profiles/2x.jpg') }}"
                                                    data-src="{{ asset('themes/page/assets/img/profiles/2.jpg') }}"
                                                    src="{{ asset('themes/page/assets/img/profiles/2x.jpg') }}"
                                                    class="col-top">
                                            </span>
                                            <p class="p-l-10 ">
                                                <span class="text-color">phyllis hamilton</span>
                                                <span class="block text-color hint-text fs-12">Hello there</span>
                                            </p>
                                        </a>
                                    </li>
                                    <!-- END Chat User List Item  !-->
                                </ul>
                            </div>
                            <div class="list-view-group-container">
                                <div class="list-view-group-header text-uppercase">r</div>
                                <ul>
                                    <!-- BEGIN Chat User List Item  !-->
                                    <li class="chat-user-list clearfix">
                                        <a data-view-animation="push-parrallax" data-view-port="#chat"
                                            data-navigate="view" class="" href="#">
                                            <span class="thumbnail-wrapper d32 circular bg-success">
                                                <img width="34" height="34" alt=""
                                                    data-src-retina="{{ asset('themes/page/assets/img/profiles/3x.jpg') }}"
                                                    data-src="{{ asset('themes/page/assets/img/profiles/3.jpg') }}"
                                                    src="{{ asset('themes/page/assets/img/profiles/3x.jpg') }}"
                                                    class="col-top">
                                            </span>
                                            <p class="p-l-10 ">
                                                <span class="text-color">raul rodriquez</span>
                                                <span class="block text-color hint-text fs-12">Hello there</span>
                                            </p>
                                        </a>
                                    </li>
                                    <!-- END Chat User List Item  !-->
                                    <!-- BEGIN Chat User List Item  !-->
                                    <li class="chat-user-list clearfix">
                                        <a data-view-animation="push-parrallax" data-view-port="#chat"
                                            data-navigate="view" class="" href="#">
                                            <span class="thumbnail-wrapper d32 circular bg-success">
                                                <img width="34" height="34" alt=""
                                                    data-src-retina="{{ asset('themes/page/assets/img/profiles/4x.jpg') }}"
                                                    data-src="{{ asset('themes/page/assets/img/profiles/4.jpg') }}"
                                                    src="{{ asset('themes/page/assets/img/profiles/4x.jpg') }}"
                                                    class="col-top">
                                            </span>
                                            <p class="p-l-10 ">
                                                <span class="text-color">rhonda barnett</span>
                                                <span class="block text-color hint-text fs-12">Hello there</span>
                                            </p>
                                        </a>
                                    </li>
                                    <!-- END Chat User List Item  !-->
                                    <!-- BEGIN Chat User List Item  !-->
                                    <li class="chat-user-list clearfix">
                                        <a data-view-animation="push-parrallax" data-view-port="#chat"
                                            data-navigate="view" class="" href="#">
                                            <span class="thumbnail-wrapper d32 circular bg-success">
                                                <img width="34" height="34" alt=""
                                                    data-src-retina="{{ asset('themes/page/assets/img/profiles/5x.jpg') }}"
                                                    data-src="{{ asset('themes/page/assets/img/profiles/5.jpg') }}"
                                                    src="{{ asset('themes/page/assets/img/profiles/5x.jpg') }}"
                                                    class="col-top">
                                            </span>
                                            <p class="p-l-10 ">
                                                <span class="text-color">roberta king</span>
                                                <span class="block text-color hint-text fs-12">Hello there</span>
                                            </p>
                                        </a>
                                    </li>
                                    <!-- END Chat User List Item  !-->
                                </ul>
                            </div>
                            <div class="list-view-group-container">
                                <div class="list-view-group-header text-uppercase">s</div>
                                <ul>
                                    <!-- BEGIN Chat User List Item  !-->
                                    <li class="chat-user-list clearfix">
                                        <a data-view-animation="push-parrallax" data-view-port="#chat"
                                            data-navigate="view" class="" href="#">
                                            <span class="thumbnail-wrapper d32 circular bg-success">
                                                <img width="34" height="34" alt=""
                                                    data-src-retina="{{ asset('themes/page/assets/img/profiles/6x.jpg') }}"
                                                    data-src="{{ asset('themes/page/assets/img/profiles/6.jpg') }}"
                                                    src="{{ asset('themes/page/assets/img/profiles/6x.jpg') }}"
                                                    class="col-top">
                                            </span>
                                            <p class="p-l-10 ">
                                                <span class="text-color">scott armstrong</span>
                                                <span class="block text-color hint-text fs-12">Hello there</span>
                                            </p>
                                        </a>
                                    </li>
                                    <!-- END Chat User List Item  !-->
                                    <!-- BEGIN Chat User List Item  !-->
                                    <li class="chat-user-list clearfix">
                                        <a data-view-animation="push-parrallax" data-view-port="#chat"
                                            data-navigate="view" class="" href="#">
                                            <span class="thumbnail-wrapper d32 circular bg-success">
                                                <img width="34" height="34" alt=""
                                                    data-src-retina="{{ asset('themes/page/assets/img/profiles/7x.jpg') }}"
                                                    data-src="{{ asset('themes/page/assets/img/profiles/7.jpg') }}"
                                                    src="{{ asset('themes/page/assets/img/profiles/7x.jpg') }}"
                                                    class="col-top">
                                            </span>
                                            <p class="p-l-10 ">
                                                <span class="text-color">sebastian austin</span>
                                                <span class="block text-color hint-text fs-12">Hello there</span>
                                            </p>
                                        </a>
                                    </li>
                                    <!-- END Chat User List Item  !-->
                                    <!-- BEGIN Chat User List Item  !-->
                                    <li class="chat-user-list clearfix">
                                        <a data-view-animation="push-parrallax" data-view-port="#chat"
                                            data-navigate="view" class="" href="#">
                                            <span class="thumbnail-wrapper d32 circular bg-success">
                                                <img width="34" height="34" alt=""
                                                    data-src-retina="{{ asset('themes/page/assets/img/profiles/8x.jpg') }}"
                                                    data-src="{{ asset('themes/page/assets/img/profiles/8.jpg') }}"
                                                    src="{{ asset('themes/page/assets/img/profiles/8x.jpg') }}"
                                                    class="col-top">
                                            </span>
                                            <p class="p-l-10 ">
                                                <span class="text-color">sofia davis</span>
                                                <span class="block text-color hint-text fs-12">Hello there</span>
                                            </p>
                                        </a>
                                    </li>
                                    <!-- END Chat User List Item  !-->
                                </ul>
                            </div>
                            <div class="list-view-group-container">
                                <div class="list-view-group-header text-uppercase">t</div>
                                <ul>
                                    <!-- BEGIN Chat User List Item  !-->
                                    <li class="chat-user-list clearfix">
                                        <a data-view-animation="push-parrallax" data-view-port="#chat"
                                            data-navigate="view" class="" href="#">
                                            <span class="thumbnail-wrapper d32 circular bg-success">
                                                <img width="34" height="34" alt=""
                                                    data-src-retina="{{ asset('themes/page/assets/img/profiles/9x.jpg') }}"
                                                    data-src="{{ asset('themes/page/assets/img/profiles/9.jpg') }}"
                                                    src="{{ asset('themes/page/assets/img/profiles/9x.jpg') }}"
                                                    class="col-top">
                                            </span>
                                            <p class="p-l-10 ">
                                                <span class="text-color">terrance young</span>
                                                <span class="block text-color hint-text fs-12">Hello there</span>
                                            </p>
                                        </a>
                                    </li>
                                    <!-- END Chat User List Item  !-->
                                    <!-- BEGIN Chat User List Item  !-->
                                    <li class="chat-user-list clearfix">
                                        <a data-view-animation="push-parrallax" data-view-port="#chat"
                                            data-navigate="view" class="" href="#">
                                            <span class="thumbnail-wrapper d32 circular bg-success">
                                                <img width="34" height="34" alt=""
                                                    data-src-retina="{{ asset('themes/page/assets/img/profiles/1x.jpg') }}"
                                                    data-src="{{ asset('themes/page/assets/img/profiles/1.jpg') }}"
                                                    src="{{ asset('themes/page/assets/img/profiles/1x.jpg') }}"
                                                    class="col-top">
                                            </span>
                                            <p class="p-l-10 ">
                                                <span class="text-color">theodore woods</span>
                                                <span class="block text-color hint-text fs-12">Hello there</span>
                                            </p>
                                        </a>
                                    </li>
                                    <!-- END Chat User List Item  !-->
                                    <!-- BEGIN Chat User List Item  !-->
                                    <li class="chat-user-list clearfix">
                                        <a data-view-animation="push-parrallax" data-view-port="#chat"
                                            data-navigate="view" class="" href="#">
                                            <span class="thumbnail-wrapper d32 circular bg-success">
                                                <img width="34" height="34" alt=""
                                                    data-src-retina="{{ asset('themes/page/assets/img/profiles/2x.jpg') }}"
                                                    data-src="{{ asset('themes/page/assets/img/profiles/2.jpg') }}"
                                                    src="{{ asset('themes/page/assets/img/profiles/2x.jpg') }}"
                                                    class="col-top">
                                            </span>
                                            <p class="p-l-10 ">
                                                <span class="text-color">todd wood</span>
                                                <span class="block text-color hint-text fs-12">Hello there</span>
                                            </p>
                                        </a>
                                    </li>
                                    <!-- END Chat User List Item  !-->
                                    <!-- BEGIN Chat User List Item  !-->
                                    <li class="chat-user-list clearfix">
                                        <a data-view-animation="push-parrallax" data-view-port="#chat"
                                            data-navigate="view" class="" href="#">
                                            <span class="thumbnail-wrapper d32 circular bg-success">
                                                <img width="34" height="34" alt=""
                                                    data-src-retina="{{ asset('themes/page/assets/img/profiles/3x.jpg') }}"
                                                    data-src="{{ asset('themes/page/assets/img/profiles/3.jpg') }}"
                                                    src="{{ asset('themes/page/assets/img/profiles/3x.jpg') }}"
                                                    class="col-top">
                                            </span>
                                            <p class="p-l-10 ">
                                                <span class="text-color">tommy jenkins</span>
                                                <span class="block text-color hint-text fs-12">Hello there</span>
                                            </p>
                                        </a>
                                    </li>
                                    <!-- END Chat User List Item  !-->
                                </ul>
                            </div>
                            <div class="list-view-group-container">
                                <div class="list-view-group-header text-uppercase">w</div>
                                <ul>
                                    <!-- BEGIN Chat User List Item  !-->
                                    <li class="chat-user-list clearfix">
                                        <a data-view-animation="push-parrallax" data-view-port="#chat"
                                            data-navigate="view" class="" href="#">
                                            <span class="thumbnail-wrapper d32 circular bg-success">
                                                <img width="34" height="34" alt=""
                                                    data-src-retina="{{ asset('themes/page/assets/img/profiles/4x.jpg') }}"
                                                    data-src="{{ asset('themes/page/assets/img/profiles/4.jpg') }}"
                                                    src="{{ asset('themes/page/assets/img/profiles/4x.jpg') }}"
                                                    class="col-top">
                                            </span>
                                            <p class="p-l-10 ">
                                                <span class="text-color">wilma hicks</span>
                                                <span class="block text-color hint-text fs-12">Hello there</span>
                                            </p>
                                        </a>
                                    </li>
                                    <!-- END Chat User List Item  !-->
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- BEGIN Conversation View  !-->
                    <div class="view chat-view bg-white clearfix">
                        <!-- BEGIN Header  !-->
                        <div class="navbar navbar-default">
                            <div class="navbar-inner">
                                <a href="javascript:;" class="link text-color action p-l-10 p-r-10"
                                    data-navigate="view" data-view-port="#chat" data-view-animation="push-parrallax">
                                    <i class="pg-icon">chevron_left</i>
                                </a>
                                <div class="view-heading">
                                    John Smith
                                    <div class="fs-11 hint-text">Online</div>
                                </div>
                                <a href="#" class="link text-color action p-r-10 pull-right ">
                                    <i class="pg-icon">more_horizontal</i>
                                </a>
                            </div>
                        </div>
                        <!-- END Header  !-->
                        <!-- BEGIN Conversation  !-->
                        <div class="chat-inner" id="my-conversation">
                            <!-- BEGIN From Me Message  !-->
                            <div class="message clearfix">
                                <div class="chat-bubble from-me">
                                    Hello there
                                </div>
                            </div>
                            <!-- END From Me Message  !-->
                            <!-- BEGIN From Them Message  !-->
                            <div class="message clearfix">
                                <div class="profile-img-wrapper m-t-5 inline">
                                    <img class="col-top" width="30" height="30"
                                        src="{{ asset('themes/page/assets/img/profiles/avatar_small.jpg') }}"
                                        alt=""
                                        data-src="{{ asset('themes/page/assets/img/profiles/avatar_small.jpg') }}"
                                        data-src-retina="{{ asset('themes/page/assets/img/profiles/avatar_small2x.jpg') }}">
                                </div>
                                <div class="chat-bubble from-them">
                                    Hey
                                </div>
                            </div>
                            <!-- END From Them Message  !-->
                            <!-- BEGIN From Me Message  !-->
                            <div class="message clearfix">
                                <div class="chat-bubble from-me">
                                    Did you check out Pages framework ?
                                </div>
                            </div>
                            <!-- END From Me Message  !-->
                            <!-- BEGIN From Me Message  !-->
                            <div class="message clearfix">
                                <div class="chat-bubble from-me">
                                    Its an awesome chat
                                </div>
                            </div>
                            <!-- END From Me Message  !-->
                            <!-- BEGIN From Them Message  !-->
                            <div class="message clearfix">
                                <div class="profile-img-wrapper m-t-5 inline">
                                    <img class="col-top" width="30" height="30"
                                        src="{{ asset('themes/page/assets/img/profiles/avatar_small.jpg') }}"
                                        alt=""
                                        data-src="{{ asset('themes/page/assets/img/profiles/avatar_small.jpg') }}"
                                        data-src-retina="{{ asset('themes/page/assets/img/profiles/avatar_small2x.jpg') }}">
                                </div>
                                <div class="chat-bubble from-them">
                                    Yea
                                </div>
                            </div>
                            <!-- END From Them Message  !-->
                        </div>
                        <!-- BEGIN Conversation  !-->
                        <!-- BEGIN Chat Input  !-->
                        <div class="b-t b-grey bg-white clearfix p-l-10 p-r-10">
                            <div class="row">
                                <div class="col-1 p-t-15">
                                    <a href="#" class="link text-color"><i class="pg-icon">add</i></a>
                                </div>
                                <div class="col-8 no-padding">
                                    <label class="d-none">Reply</label>
                                    <input type="text" class="form-control chat-input" data-chat-input=""
                                        data-chat-conversation="#my-conversation" placeholder="Say something">
                                </div>
                                <div class="col-2 link text-color m-l-10 m-t-15 p-l-10 b-l b-grey col-top">
                                    <a href="#" class="link text-color"><i class="pg-icon">camera</i></a>
                                </div>
                            </div>
                        </div>
                        <!-- END Chat Input  !-->
                    </div>
                    <!-- END Conversation View  !-->
                </div>
            </div>
        </div>
    </div>
    <!-- END QUICKVIEW-->
    <!-- START OVERLAY -->
    <div class="overlay hide" data-pages="search">
        <!-- BEGIN Overlay Content !-->
        <div class="overlay-content has-results m-t-20">
            <!-- BEGIN Overlay Header !-->
            <div class="container-fluid">
                <!-- BEGIN Overlay Logo !-->
                <img class="overlay-brand" src="{{ asset('themes/page/assets/img/logo.png') }}" alt="logo"
                    data-src="{{ asset('themes/page/assets/img/logo.png') }}"
                    data-src-retina="{{ asset('themes/page/assets/img/logo_2x.png') }}" width="78"
                    height="22">
                <!-- END Overlay Logo !-->
                <!-- BEGIN Overlay Close !-->
                <a href="#" class="close-icon-light btn-link btn-rounded  overlay-close text-black">
                    <i class="pg-icon">close</i>
                </a>
                <!-- END Overlay Close !-->
            </div>
            <!-- END Overlay Header !-->
            <div class="container-fluid">
                <!-- BEGIN Overlay Controls !-->
                <input id="overlay-search" class="no-border overlay-search bg-transparent" placeholder="Search..."
                    autocomplete="off" spellcheck="false">
                <br>
                <div class="d-flex align-items-center">
                    <div class="form-check right m-b-0">
                        <input id="checkboxn" type="checkbox" value="1">
                        <label for="checkboxn">Search within page</label>
                    </div>
                    <p class="fs-13 hint-text m-l-10 m-b-0">Press enter to search</p>
                </div>
                <!-- END Overlay Controls !-->
            </div>
            <!-- BEGIN Overlay Search Results, This part is for demo purpose, you can add anything you like !-->
            <div class="container-fluid p-t-20">
                <span class="hint-text">
                    suggestions :
                </span>
                <span class="overlay-suggestions"></span>
                <br>
                <div class="search-results m-t-30">
                    <p class="bold">Pages Search Results: <span class="overlay-suggestions"></span></p>
                    <div class="row">
                        <div class="col-md-6">
                            <!-- BEGIN Search Result Item !-->
                            <div class="d-flex m-t-15">
                                <!-- BEGIN Search Result Item Thumbnail !-->
                                <div class="thumbnail-wrapper d48 circular bg-success text-white ">
                                    <img width="36" height="36"
                                        src="{{ asset('themes/page/assets/img/profiles/avatar.jpg') }}"
                                        data-src="{{ asset('themes/page/assets/img/profiles/avatar.jpg') }}"
                                        data-src-retina="{{ asset('themes/page/assets/img/profiles/avatar2x.jpg') }}"
                                        alt="">
                                </div>
                                <!-- END Search Result Item Thumbnail !-->
                                <div class="p-l-10">
                                    <h5 class="no-margin "><span class="semi-bold result-name">ice cream</span> on
                                        pages</h5>
                                    <p class="small-text hint-text">via john smith</p>
                                </div>
                            </div>
                            <!-- END Search Result Item !-->
                            <!-- BEGIN Search Result Item !-->
                            <div class="d-flex m-t-15">
                                <!-- BEGIN Search Result Item Thumbnail !-->
                                <div class="thumbnail-wrapper d48 circular bg-success text-white ">
                                    <div>T</div>
                                </div>
                                <!-- END Search Result Item Thumbnail !-->
                                <div class="p-l-10">
                                    <h5 class="no-margin "><span class="semi-bold result-name">ice cream</span>
                                        related topics</h5>
                                    <p class="small-text hint-text">via pages</p>
                                </div>
                            </div>
                            <!-- END Search Result Item !-->
                            <!-- BEGIN Search Result Item !-->
                            <div class="d-flex m-t-15">
                                <!-- BEGIN Search Result Item Thumbnail !-->
                                <div class="thumbnail-wrapper d48 circular bg-success text-white ">
                                    <div>M
                                    </div>
                                </div>
                                <!-- END Search Result Item Thumbnail !-->
                                <div class="p-l-10">
                                    <h5 class="no-margin "><span class="semi-bold result-name">ice cream</span>
                                        music</h5>
                                    <p class="small-text hint-text">via pagesmix</p>
                                </div>
                            </div>
                            <!-- END Search Result Item !-->
                        </div>
                        <div class="col-md-6">
                            <!-- BEGIN Search Result Item !-->
                            <div class="d-flex m-t-15">
                                <!-- BEGIN Search Result Item Thumbnail !-->
                                <div class="thumbnail-wrapper d48 circular bg-info text-white d-flex align-items-center">
                                    <i class="pg-icon">facebook</i>
                                </div>
                                <!-- END Search Result Item Thumbnail !-->
                                <div class="p-l-10">
                                    <h5 class="no-margin "><span class="semi-bold result-name">ice cream</span> on
                                        facebook</h5>
                                    <p class="small-text hint-text">via facebook</p>
                                </div>
                            </div>
                            <!-- END Search Result Item !-->
                            <!-- BEGIN Search Result Item !-->
                            <div class="d-flex m-t-15">
                                <!-- BEGIN Search Result Item Thumbnail !-->
                                <div
                                    class="thumbnail-wrapper d48 circular bg-complete text-white d-flex align-items-center">
                                    <i class="pg-icon">twitter</i>
                                </div>
                                <!-- END Search Result Item Thumbnail !-->
                                <div class="p-l-10">
                                    <h5 class="no-margin ">Tweats on<span class="semi-bold result-name"> ice
                                            cream</span></h5>
                                    <p class="small-text hint-text">via twitter</p>
                                </div>
                            </div>
                            <!-- END Search Result Item !-->
                            <!-- BEGIN Search Result Item !-->
                            <div class="d-flex m-t-15">
                                <!-- BEGIN Search Result Item Thumbnail !-->
                                <div
                                    class="thumbnail-wrapper d48 circular text-white bg-danger d-flex align-items-center">
                                    <i class="pg-icon">google_plus</i>
                                </div>
                                <!-- END Search Result Item Thumbnail !-->
                                <div class="p-l-10">
                                    <h5 class="no-margin ">Circles on<span class="semi-bold result-name"> ice
                                            cream</span></h5>
                                    <p class="small-text hint-text">via google plus</p>
                                </div>
                            </div>
                            <!-- END Search Result Item !-->
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Overlay Search Results !-->
        </div>
        <!-- END Overlay Content !-->
    </div>
@endsection
