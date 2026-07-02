<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    // si no SESION es pq no hay usuario logueado, mostrar el formulario de login
    header("Location: ../user/login/");
    exit(); // siempre que hay un redireccionamiento
} 

$ruta = ['assets/' => '../', 'components/' => ''];
$_SESSION['ruta'] = $ruta;
$_SESSION['titulos'] = ['WebTitle' => 'Programación Web en PHP con AdminLTE'];
?>

<!doctype html>
<html lang="en">
  <!--begin::Head-->
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?php echo $_SESSION['titulos']['WebTitle']; ?></title>

    <!--begin::Accessibility Meta Tags-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes" />
    <meta name="color-scheme" content="light dark" />
    <meta name="theme-color" content="#007bff" media="(prefers-color-scheme: light)" />
    <meta name="theme-color" content="#1a1a1a" media="(prefers-color-scheme: dark)" />
    <!--end::Accessibility Meta Tags-->

    <!--begin::Primary Meta Tags-->
    <meta name="title" content="AdminLTE v4 | Dashboard" />
    <meta name="author" content="ColorlibHQ" />
    <meta
      name="description"
      content="CRM Ventas"
    />
    <meta
      name="keywords"
      content="bootstrap 5, bootstrap, bootstrap 5 admin dashboard, bootstrap 5 dashboard, bootstrap 5 charts, bootstrap 5 calendar, bootstrap 5 datepicker, bootstrap 5 tables, bootstrap 5 datatable, vanilla js datatable, colorlibhq, colorlibhq dashboard, colorlibhq admin dashboard, accessible admin panel, WCAG compliant"
    />
    <!--end::Primary Meta Tags-->

    <!--begin::Accessibility Features-->
    <!-- Skip links will be dynamically added by accessibility.js -->
    <meta name="supported-color-schemes" content="light dark" />
    <link rel="preload" href="../assets/css/adminlte.css" as="style" />
    <!--end::Accessibility Features-->

    <!--begin::Fonts-->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/@fontsource/source-sans-3@5.0.12/index.css"
      integrity="sha256-tXJfXfp6Ewt1ilPzLDtQnJV4hclT9XuaZUKyUvmyr+Q="
      crossorigin="anonymous"
      media="print"
      onload="this.media = 'all'"
    />
    <!--end::Fonts-->

    <!--begin::Third Party Plugin(OverlayScrollbars)-->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.11.0/styles/overlayscrollbars.min.css"
      crossorigin="anonymous"
    />
    <!--end::Third Party Plugin(OverlayScrollbars)-->

    <!--begin::Third Party Plugin(Bootstrap Icons)-->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css"
      crossorigin="anonymous"
    />
    <!--end::Third Party Plugin(Bootstrap Icons)-->

    <!--begin::Required Plugin(AdminLTE)-->
    <link rel="stylesheet" href="../assets/css/adminlte.css" />
    <!--end::Required Plugin(AdminLTE)-->

    <!-- apexcharts -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/apexcharts@3.37.1/dist/apexcharts.css"
      integrity="sha256-4MX+61mt9NVvvuPjUWdUdyfZfxSB1/Rf9WtqRHgG5S0="
      crossorigin="anonymous"
    />

    <!-- jsvectormap -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/jsvectormap@1.5.3/dist/css/jsvectormap.min.css"
      integrity="sha256-+uGLJmmTKOqBr+2E6KDYs/NRsHxSkONXFHUL0fy2O/4="
      crossorigin="anonymous"
    />
  </head>
  <!--end::Head-->
  <!--begin::Body-->
  <body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
    <!--begin::App Wrapper-->
    <div class="app-wrapper">
      <!--begin::Header-->
      <?php include_once('components/nav-v1.php'); ?>
      <!--end::Header-->
      <!--begin::Sidebar-->
      <?php include_once('components/aside-v1.php'); ?>
      <!--end::Sidebar-->
      <!--begin::App Main-->
      <main class="app-main">
        <!--begin::App Content Header-->
        <div class="app-content-header">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
              <div class="col-sm-6">
                <h3 class="mb-0">Dashboard</h3>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                </ol>
              </div>
            </div>
            <!--end::Row-->
          </div>
          <!--end::Container-->
        </div>
        <!--end::App Content Header-->
        <!--begin::App Content-->
        <div class="app-content">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
              <!--begin::Col-->
              <div class="col-lg-3 col-6">
                <!--begin::Small Box Widget 1-->
                <div class="small-box text-bg-primary">
                  <div class="inner">
                    <h3>5</h3>

                    <p>Ventas a cerrar</p>
                  </div>
                  <svg
                    class="small-box-icon"
                    fill="currentColor"
                    viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg"
                    aria-hidden="true"
                  >
                    <path
                      d="M2.25 2.25a.75.75 0 000 1.5h1.386c.17 0 .318.114.362.278l2.558 9.592a3.752 3.752 0 00-2.806 3.63c0 .414.336.75.75.75h15.75a.75.75 0 000-1.5H5.378A2.25 2.25 0 017.5 15h11.218a.75.75 0 00.674-.421 60.358 60.358 0 002.96-7.228.75.75 0 00-.525-.965A60.864 60.864 0 005.68 4.509l-.232-.867A1.875 1.875 0 003.636 2.25H2.25zM3.75 20.25a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0zM16.5 20.25a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0z"
                    ></path>
                  </svg>
                  <a
                    href="#"
                    class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover"
                  >
                    Más info <i class="bi bi-link-45deg"></i>
                  </a>
                </div>
                <!--end::Small Box Widget 1-->
              </div>
              <!--end::Col-->
              <div class="col-lg-3 col-6">
                <!--begin::Small Box Widget 2-->
                <div class="small-box text-bg-success">
                  <div class="inner">
                    <h3>14<sup class="fs-5">%</sup></h3>

                    <p>Crecimiento de ventas</p>
                  </div>
                  <svg
                    class="small-box-icon"
                    fill="currentColor"
                    viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg"
                    aria-hidden="true"
                  >
                    <path
                      d="M18.375 2.25c-1.035 0-1.875.84-1.875 1.875v15.75c0 1.035.84 1.875 1.875 1.875h.75c1.035 0 1.875-.84 1.875-1.875V4.125c0-1.036-.84-1.875-1.875-1.875h-.75zM9.75 8.625c0-1.036.84-1.875 1.875-1.875h.75c1.036 0 1.875.84 1.875 1.875v11.25c0 1.035-.84 1.875-1.875 1.875h-.75a1.875 1.875 0 01-1.875-1.875V8.625zM3 13.125c0-1.036.84-1.875 1.875-1.875h.75c1.036 0 1.875.84 1.875 1.875v6.75c0 1.035-.84 1.875-1.875 1.875h-.75A1.875 1.875 0 013 19.875v-6.75z"
                    ></path>
                  </svg>
                  <a
                    href="#"
                    class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover"
                  >
                    Más info <i class="bi bi-link-45deg"></i>
                  </a>
                </div>
                <!--end::Small Box Widget 2-->
              </div>
              <!--end::Col-->
              <div class="col-lg-3 col-6">
                <!--begin::Small Box Widget 3-->
                <div class="small-box text-bg-warning">
                  <div class="inner">
                    <h3>40</h3>

                    <p>Nuevos prospectos</p>
                  </div>
                  <svg
                    class="small-box-icon"
                    fill="currentColor"
                    viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg"
                    aria-hidden="true"
                  >
                    <path
                      d="M6.25 6.375a4.125 4.125 0 118.25 0 4.125 4.125 0 01-8.25 0zM3.25 19.125a7.125 7.125 0 0114.25 0v.003l-.001.119a.75.75 0 01-.363.63 13.067 13.067 0 01-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75 0 01-.364-.63l-.001-.122zM19.75 7.5a.75.75 0 00-1.5 0v2.25H16a.75.75 0 000 1.5h2.25v2.25a.75.75 0 001.5 0v-2.25H22a.75.75 0 000-1.5h-2.25V7.5z"
                    ></path>
                  </svg>
                  <a
                    href="#"
                    class="small-box-footer link-dark link-underline-opacity-0 link-underline-opacity-50-hover"
                  >
                    Más info <i class="bi bi-link-45deg"></i>
                  </a>
                </div>
                <!--end::Small Box Widget 3-->
              </div>
              <!--end::Col-->
              <div class="col-lg-3 col-6">
                <!--begin::Small Box Widget 4-->
                <div class="small-box text-bg-danger">
                  <div class="inner">
                    <h3>34</h3>

                    <p>Prospectos a agendar</p>
                  </div>
                  <svg
                    class="small-box-icon"
                    fill="currentColor"
                    viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg"
                    aria-hidden="true"
                  >
                    <path
                      clip-rule="evenodd"
                      fill-rule="evenodd"
                      d="M2.25 13.5a8.25 8.25 0 018.25-8.25.75.75 0 01.75.75v6.75H18a.75.75 0 01.75.75 8.25 8.25 0 01-16.5 0z"
                    ></path>
                    <path
                      clip-rule="evenodd"
                      fill-rule="evenodd"
                      d="M12.75 3a.75.75 0 01.75-.75 8.25 8.25 0 018.25 8.25.75.75 0 01-.75.75h-7.5a.75.75 0 01-.75-.75V3z"
                    ></path>
                  </svg>
                  <a
                    href="#"
                    class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover"
                  >
                    Más info <i class="bi bi-link-45deg"></i>
                  </a>
                </div>
                <!--end::Small Box Widget 4-->
              </div>
              <!--end::Col-->
            </div>
            <!--end::Row-->
              <!--begin::Row-->
            <div class="row">
              <div class="col-md-12">
                <div class="card mb-4">
                  <div class="card-header">
                    <h5 class="card-title">Ventas mensuales</h5>

                    <div class="card-tools">
                      <button type="button" class="btn btn-tool" data-lte-toggle="card-collapse">
                        <i data-lte-icon="expand" class="bi bi-plus-lg"></i>
                        <i data-lte-icon="collapse" class="bi bi-dash-lg"></i>
                      </button>
                      <button type="button" class="btn btn-tool" data-lte-toggle="card-remove">
                        <i class="bi bi-x-lg"></i>
                      </button>
                    </div>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <!--begin::Row-->
                    <div class="row">
                      <div class="col-md-8">
                        <p class="text-center">
                          <strong>Periodo: 1 de Junio, 2026 - 1 de Julio, 2026</strong>
                        </p>

                        <div id="sales-chart"></div>
                      </div>
                      <!-- /.col -->
                      <div class="col-md-4">
                        <p class="text-center">
                          <strong>Metas</strong>
                        </p>

                        <div class="progress-group">
                          Prospectos
                          <span class="float-end"><b>160</b>/200</span>
                          <div class="progress progress-sm">
                            <div class="progress-bar text-bg-primary" style="width: 80%"></div>
                          </div>
                        </div>
                        <!-- /.progress-group -->

                        <div class="progress-group">
                          Agendamientos
                          <span class="float-end"><b>72</b>/100</span>
                          <div class="progress progress-sm">
                            <div class="progress-bar text-bg-danger" style="width: 75%"></div>
                          </div>
                        </div>

                        <!-- /.progress-group -->
                        <div class="progress-group">
                          <span class="progress-text">Citas concretadas</span>
                          <span class="float-end"><b>29</b>/50</span>
                          <div class="progress progress-sm">
                            <div class="progress-bar text-bg-success" style="width: 60%"></div>
                          </div>
                        </div>

                        <!-- /.progress-group -->
                        <div class="progress-group">
                          Ventas cerradas
                          <span class="float-end"><b>11</b>/25</span>
                          <div class="progress progress-sm">
                            <div class="progress-bar text-bg-warning" style="width: 50%"></div>
                          </div>
                        </div>
                        <!-- /.progress-group -->
                      </div>
                      <!-- /.col -->
                    </div>
                    <!--end::Row-->
                  </div>
                  <!-- ./card-body -->
                  <div class="card-footer">
                    <!--begin::Row-->
                    <div class="row">
                      <div class="col-md-3 col-6">
                        <div class="text-center border-end">
                          <span class="text-success">
                            <i class="bi bi-caret-up-fill"></i> 17%
                          </span>
                          <h5 class="fw-bold mb-0">$354.390.870</h5>
                          <span class="text-uppercase">Ganancia bruta</span>
                        </div>
                      </div>

                      <!-- /.col -->
                      <div class="col-md-3 col-6">
                        <div class="text-center border-end">
                          <span class="text-info"> <i class="bi bi-caret-left-fill"></i> 0% </span>
                          <h5 class="fw-bold mb-0">$217.985.000</h5>
                          <span class="text-uppercase">Costo total</span>
                        </div>
                      </div>
                      <!-- /.col -->
                      <div class="col-md-3 col-6">
                        <div class="text-center border-end">
                          <span class="text-success">
                            <i class="bi bi-caret-up-fill"></i> 20%
                          </span>
                          <h5 class="fw-bold mb-0">$136.405.870</h5>
                          <span class="text-uppercase">Utilidades</span>
                        </div>
                      </div>
                      <!-- /.col -->
                      <div class="col-md-3 col-6">
                        <div class="text-center">
                          <span class="text-danger">
                            <i class="bi bi-caret-down-fill"></i> 18%
                          </span>
                          <h5 class="fw-bold mb-0">272/375 </h5>
                          <span class="text-uppercase">Metas cumplidas</span>
                        </div>
                      </div>
                    </div>
                    <!--end::Row-->
                  </div>
                  <!-- /.card-footer -->
                </div>
                <!-- /.card -->
              </div>
              <!-- /.col -->
            </div>
            <!--end::Row-->
            <div class="card mb-4">
                  <div class="card-header">
                    <h3 class="card-title">Grafico de ventas pendientes</h3>

                    <div class="card-tools">
                      <button type="button" class="btn btn-tool" data-lte-toggle="card-collapse">
                        <i data-lte-icon="expand" class="bi bi-plus-lg"></i>
                        <i data-lte-icon="collapse" class="bi bi-dash-lg"></i>
                      </button>
                      <button type="button" class="btn btn-tool" data-lte-toggle="card-remove">
                        <i class="bi bi-x-lg"></i>
                      </button>
                    </div>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <!--begin::Row-->
                    <div class="row">
                      <div class="col-12">
                        <div id="pie-chart" style="min-height: 148.7px;"><div id="apexcharts2g6b7opch" class="apexcharts-canvas apexcharts2g6b7opch apexcharts-theme-light" style="width: 281px; height: 148.7px;"><svg id="SvgjsSvg1912" width="281" height="148.7" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1914" class="apexcharts-inner apexcharts-graphical" transform="translate(22, 0)"><defs id="SvgjsDefs1913"><clipPath id="gridRectMask2g6b7opch"><rect id="SvgjsRect1916" width="152" height="352" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMask2g6b7opch"></clipPath><clipPath id="nonForecastMask2g6b7opch"></clipPath><clipPath id="gridRectMarkerMask2g6b7opch"><rect id="SvgjsRect1917" width="150" height="354" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG1918" class="apexcharts-pie"><g id="SvgjsG1919" transform="translate(0, 0) scale(1)"><circle id="SvgjsCircle1920" r="42.392682926829266" cx="73" cy="73" fill="transparent"></circle><g id="SvgjsG1921" class="apexcharts-slices"><g id="SvgjsG1922" class="apexcharts-series apexcharts-pie-series" seriesName="Chrome" rel="1" data:realIndex="0"><path id="SvgjsPath1923" d="M 73 7.7804878048780495 A 65.21951219512195 65.21951219512195 0 0 1 137.7439885204438 80.86134348787155 L 115.08359253828849 78.10987326711651 A 42.392682926829266 42.392682926829266 0 0 0 73 30.607317073170734 L 73 7.7804878048780495 z" fill="rgba(13,110,253,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-0" index="0" j="0" data:angle="96.92307692307692" data:startAngle="0" data:strokeWidth="2" data:value="700" data:pathOrig="M 73 7.7804878048780495 A 65.21951219512195 65.21951219512195 0 0 1 137.7439885204438 80.86134348787155 L 115.08359253828849 78.10987326711651 A 42.392682926829266 42.392682926829266 0 0 0 73 30.607317073170734 L 73 7.7804878048780495 z" stroke="#ffffff"></path></g><g id="SvgjsG1924" class="apexcharts-series apexcharts-pie-series" seriesName="Edge" rel="2" data:realIndex="1"><path id="SvgjsPath1925" d="M 137.7439885204438 80.86134348787155 A 65.21951219512195 65.21951219512195 0 0 1 88.60805088548612 136.32435170237227 L 83.14523307556598 114.16082860654197 A 42.392682926829266 42.392682926829266 0 0 0 115.08359253828849 78.10987326711651 L 137.7439885204438 80.86134348787155 z" fill="rgba(32,201,151,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-1" index="0" j="1" data:angle="69.23076923076921" data:startAngle="96.92307692307692" data:strokeWidth="2" data:value="500" data:pathOrig="M 137.7439885204438 80.86134348787155 A 65.21951219512195 65.21951219512195 0 0 1 88.60805088548612 136.32435170237227 L 83.14523307556598 114.16082860654197 A 42.392682926829266 42.392682926829266 0 0 0 115.08359253828849 78.10987326711651 L 137.7439885204438 80.86134348787155 z" stroke="#ffffff"></path></g><g id="SvgjsG1926" class="apexcharts-series apexcharts-pie-series" seriesName="FireFox" rel="3" data:realIndex="2"><path id="SvgjsPath1927" d="M 88.60805088548612 136.32435170237227 A 65.21951219512195 65.21951219512195 0 0 1 29.75146370400281 121.81750586852502 L 44.88845140760183 104.73137881454126 A 42.392682926829266 42.392682926829266 0 0 0 83.14523307556598 114.16082860654197 L 88.60805088548612 136.32435170237227 z" fill="rgba(255,193,7,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-2" index="0" j="2" data:angle="55.38461538461539" data:startAngle="166.15384615384613" data:strokeWidth="2" data:value="400" data:pathOrig="M 88.60805088548612 136.32435170237227 A 65.21951219512195 65.21951219512195 0 0 1 29.75146370400281 121.81750586852502 L 44.88845140760183 104.73137881454126 A 42.392682926829266 42.392682926829266 0 0 0 83.14523307556598 114.16082860654197 L 88.60805088548612 136.32435170237227 z" stroke="#ffffff"></path></g><g id="SvgjsG1928" class="apexcharts-series apexcharts-pie-series" seriesName="Safari" rel="4" data:realIndex="3"><path id="SvgjsPath1929" d="M 29.75146370400281 121.81750586852502 A 65.21951219512195 65.21951219512195 0 0 1 19.32539372196004 35.951094322948556 L 38.11150591927403 48.918211309916565 A 42.392682926829266 42.392682926829266 0 0 0 44.88845140760183 104.73137881454126 L 29.75146370400281 121.81750586852502 z" fill="rgba(214,51,132,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-3" index="0" j="3" data:angle="83.07692307692307" data:startAngle="221.53846153846152" data:strokeWidth="2" data:value="600" data:pathOrig="M 29.75146370400281 121.81750586852502 A 65.21951219512195 65.21951219512195 0 0 1 19.32539372196004 35.951094322948556 L 38.11150591927403 48.918211309916565 A 42.392682926829266 42.392682926829266 0 0 0 44.88845140760183 104.73137881454126 L 29.75146370400281 121.81750586852502 z" stroke="#ffffff"></path></g><g id="SvgjsG1930" class="apexcharts-series apexcharts-pie-series" seriesName="Opera" rel="5" data:realIndex="4"><path id="SvgjsPath1931" d="M 19.32539372196004 35.951094322948556 A 65.21951219512195 65.21951219512195 0 0 1 57.391949114513864 9.675648297627745 L 62.85476692443401 31.839171393458038 A 42.392682926829266 42.392682926829266 0 0 0 38.11150591927403 48.918211309916565 L 19.32539372196004 35.951094322948556 z" fill="rgba(111,66,193,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-4" index="0" j="4" data:angle="41.53846153846155" data:startAngle="304.6153846153846" data:strokeWidth="2" data:value="300" data:pathOrig="M 19.32539372196004 35.951094322948556 A 65.21951219512195 65.21951219512195 0 0 1 57.391949114513864 9.675648297627745 L 62.85476692443401 31.839171393458038 A 42.392682926829266 42.392682926829266 0 0 0 38.11150591927403 48.918211309916565 L 19.32539372196004 35.951094322948556 z" stroke="#ffffff"></path></g><g id="SvgjsG1932" class="apexcharts-series apexcharts-pie-series" seriesName="IE" rel="6" data:realIndex="5"><path id="SvgjsPath1933" d="M 57.391949114513864 9.675648297627745 A 65.21951219512195 65.21951219512195 0 0 1 72.98861704781429 7.780488798228021 L 72.99260108107929 30.607317718848215 A 42.392682926829266 42.392682926829266 0 0 0 62.85476692443401 31.839171393458038 L 57.391949114513864 9.675648297627745 z" fill="rgba(173,181,189,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-5" index="0" j="5" data:angle="13.846153846153868" data:startAngle="346.15384615384613" data:strokeWidth="2" data:value="100" data:pathOrig="M 57.391949114513864 9.675648297627745 A 65.21951219512195 65.21951219512195 0 0 1 72.98861704781429 7.780488798228021 L 72.99260108107929 30.607317718848215 A 42.392682926829266 42.392682926829266 0 0 0 62.85476692443401 31.839171393458038 L 57.391949114513864 9.675648297627745 z" stroke="#ffffff"></path></g></g></g></g><line id="SvgjsLine1934" x1="0" y1="0" x2="146" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1935" x1="0" y1="0" x2="146" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line></g><g id="SvgjsG1915" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend apexcharts-align-center apx-legend-position-right" style="position: absolute; left: auto; top: 24px; right: 5px;"><div class="apexcharts-legend-series" style="margin: 2px 5px;" rel="1" seriesname="Chrome" data:collapsed="false"><span class="apexcharts-legend-marker" style="background: rgb(13, 110, 253) !important; color: rgb(13, 110, 253); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;" rel="1" data:collapsed="false"></span><span class="apexcharts-legend-text" style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;" rel="1" i="0" data:default-text="Chrome" data:collapsed="false">Chrome</span></div><div class="apexcharts-legend-series" style="margin: 2px 5px;" rel="2" seriesname="Edge" data:collapsed="false"><span class="apexcharts-legend-marker" style="background: rgb(32, 201, 151) !important; color: rgb(32, 201, 151); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;" rel="2" data:collapsed="false"></span><span class="apexcharts-legend-text" style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;" rel="2" i="1" data:default-text="Edge" data:collapsed="false">Edge</span></div><div class="apexcharts-legend-series" style="margin: 2px 5px;" rel="3" seriesname="FireFox" data:collapsed="false"><span class="apexcharts-legend-marker" style="background: rgb(255, 193, 7) !important; color: rgb(255, 193, 7); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;" rel="3" data:collapsed="false"></span><span class="apexcharts-legend-text" style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;" rel="3" i="2" data:default-text="FireFox" data:collapsed="false">FireFox</span></div><div class="apexcharts-legend-series" style="margin: 2px 5px;" rel="4" seriesname="Safari" data:collapsed="false"><span class="apexcharts-legend-marker" style="background: rgb(214, 51, 132) !important; color: rgb(214, 51, 132); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;" rel="4" data:collapsed="false"></span><span class="apexcharts-legend-text" style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;" rel="4" i="3" data:default-text="Safari" data:collapsed="false">Safari</span></div><div class="apexcharts-legend-series" style="margin: 2px 5px;" rel="5" seriesname="Opera" data:collapsed="false"><span class="apexcharts-legend-marker" style="background: rgb(111, 66, 193) !important; color: rgb(111, 66, 193); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;" rel="5" data:collapsed="false"></span><span class="apexcharts-legend-text" style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;" rel="5" i="4" data:default-text="Opera" data:collapsed="false">Opera</span></div><div class="apexcharts-legend-series" style="margin: 2px 5px;" rel="6" seriesname="IE" data:collapsed="false"><span class="apexcharts-legend-marker" style="background: rgb(173, 181, 189) !important; color: rgb(173, 181, 189); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;" rel="6" data:collapsed="false"></span><span class="apexcharts-legend-text" style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;" rel="6" i="5" data:default-text="IE" data:collapsed="false">IE</span></div></div><div class="apexcharts-tooltip apexcharts-theme-dark"><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(13, 110, 253);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group" style="order: 2;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(32, 201, 151);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group" style="order: 3;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(255, 193, 7);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group" style="order: 4;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(214, 51, 132);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group" style="order: 5;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(111, 66, 193);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group" style="order: 6;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(173, 181, 189);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div></div></div>
                      </div>
                      <!-- /.col -->
                    </div>
                    <!--end::Row-->
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer p-0">
                    <ul class="nav nav-pills flex-column" role="navigation" aria-label="Navigation 18">
                      <li class="nav-item">
                        <a href="#" class="nav-link">
                          United States of America
                          <span class="float-end text-danger">
                            <i class="bi bi-arrow-down fs-7"></i>
                            12%
                          </span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="#" class="nav-link">
                          India
                          <span class="float-end text-success">
                            <i class="bi bi-arrow-up fs-7"></i> 4%
                          </span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="#" class="nav-link">
                          China
                          <span class="float-end text-info">
                            <i class="bi bi-arrow-left fs-7"></i> 0%
                          </span>
                        </a>
                      </li>
                    </ul>
                  </div>
                  <!-- /.footer -->
                </div>
            <!--begin::Row-->
            <div class="row">
              <!-- Start col -->
              <div class="col-lg-7 connectedSortable">
                
                <!-- /.card -->
            <div class="card mb-4">
                 
                <!-- DIRECT CHAT -->
                
                <!-- /.direct-chat -->
              </div>
              <!-- /.Start col -->

              <!-- Start col -->
              
              </div>
              <!-- /.Start col -->
            </div>
            <!-- /.row (main row) -->
          </div>
          <!--end::Container-->
        </div>
        <!--end::App Content-->
      </main>
      <!--end::App Main-->
      <!--begin::Footer-->
      <?php include_once('components/footer-v1.php'); ?>
      <!--end::Footer-->
    </div>
    <!--end::App Wrapper-->
    <!--begin::Script-->
    <!--begin::Third Party Plugin(OverlayScrollbars)-->
    <script
      src="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.11.0/browser/overlayscrollbars.browser.es6.min.js"
      crossorigin="anonymous"
    ></script>
    <!--end::Third Party Plugin(OverlayScrollbars)--><!--begin::Required Plugin(popperjs for Bootstrap 5)-->
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
      crossorigin="anonymous"
    ></script>
    <!--end::Required Plugin(popperjs for Bootstrap 5)--><!--begin::Required Plugin(Bootstrap 5)-->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.min.js"
      crossorigin="anonymous"
    ></script>
    <!--end::Required Plugin(Bootstrap 5)--><!--begin::Required Plugin(AdminLTE)-->
    <script src="../assets/js/adminlte.js"></script>
    <!--end::Required Plugin(AdminLTE)--><!--begin::OverlayScrollbars Configure-->
    <script>
      const SELECTOR_SIDEBAR_WRAPPER = '.sidebar-wrapper';
      const Default = {
        scrollbarTheme: 'os-theme-light',
        scrollbarAutoHide: 'leave',
        scrollbarClickScroll: true,
      };
      document.addEventListener('DOMContentLoaded', function () {
        const sidebarWrapper = document.querySelector(SELECTOR_SIDEBAR_WRAPPER);

        // Disable OverlayScrollbars on mobile devices to prevent touch interference
        const isMobile = window.innerWidth <= 992;

        if (
          sidebarWrapper &&
          OverlayScrollbarsGlobal?.OverlayScrollbars !== undefined &&
          !isMobile
        ) {
          OverlayScrollbarsGlobal.OverlayScrollbars(sidebarWrapper, {
            scrollbars: {
              theme: Default.scrollbarTheme,
              autoHide: Default.scrollbarAutoHide,
              clickScroll: Default.scrollbarClickScroll,
            },
          });
        }
      });
    </script>
    <!--end::OverlayScrollbars Configure-->

    <!-- OPTIONAL SCRIPTS -->

    <!-- sortablejs -->
    <script
      src="https://cdn.jsdelivr.net/npm/sortablejs@1.15.0/Sortable.min.js"
      crossorigin="anonymous"
    ></script>

    <!-- sortablejs -->
    <script>
      new Sortable(document.querySelector('.connectedSortable'), {
        group: 'shared',
        handle: '.card-header',
      });

      const cardHeaders = document.querySelectorAll('.connectedSortable .card-header');
      cardHeaders.forEach((cardHeader) => {
        cardHeader.style.cursor = 'move';
      });
    </script>

    <!-- apexcharts -->
    <script
      src="https://cdn.jsdelivr.net/npm/apexcharts@3.37.1/dist/apexcharts.min.js"
      integrity="sha256-+vh8GkaU7C9/wbSLIcwq82tQ2wTf44aOHA8HlBMwRI8="
      crossorigin="anonymous"
    ></script>

    <!-- ChartJS -->
    <script>
      // NOTICE!! DO NOT USE ANY OF THIS JAVASCRIPT
      // IT'S ALL JUST JUNK FOR DEMO
      // ++++++++++++++++++++++++++++++++++++++++++

      const sales_chart_options = {
        series: [
          {
            name: 'Digital Goods',
            data: [28, 48, 40, 19, 86, 27, 90],
          },
          {
            name: 'Electronics',
            data: [65, 59, 80, 81, 56, 55, 40],
          },
        ],
        chart: {
          height: 300,
          type: 'area',
          toolbar: {
            show: false,
          },
        },
        legend: {
          show: false,
        },
        colors: ['#0d6efd', '#20c997'],
        dataLabels: {
          enabled: false,
        },
        stroke: {
          curve: 'smooth',
        },
        xaxis: {
          type: 'datetime',
          categories: [
            '2023-01-01',
            '2023-02-01',
            '2023-03-01',
            '2023-04-01',
            '2023-05-01',
            '2023-06-01',
            '2023-07-01',
          ],
        },
        tooltip: {
          x: {
            format: 'MMMM yyyy',
          },
        },
      };

      const sales_chart = new ApexCharts(
        document.querySelector('#revenue-chart'),
        sales_chart_options,
      );
      sales_chart.render();
    </script>

    <!-- jsvectormap -->
    <script
      src="https://cdn.jsdelivr.net/npm/jsvectormap@1.5.3/dist/js/jsvectormap.min.js"
      integrity="sha256-/t1nN2956BT869E6H4V1dnt0X5pAQHPytli+1nTZm2Y="
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/jsvectormap@1.5.3/dist/maps/world.js"
      integrity="sha256-XPpPaZlU8S/HWf7FZLAncLg2SAkP8ScUTII89x9D3lY="
      crossorigin="anonymous"
    ></script>

    <!-- jsvectormap -->
    <script>
      // World map by jsVectorMap
      new jsVectorMap({
        selector: '#world-map',
        map: 'world',
      });

      // Sparkline charts
      const option_sparkline1 = {
        series: [
          {
            data: [1000, 1200, 920, 927, 931, 1027, 819, 930, 1021],
          },
        ],
        chart: {
          type: 'area',
          height: 50,
          sparkline: {
            enabled: true,
          },
        },
        stroke: {
          curve: 'straight',
        },
        fill: {
          opacity: 0.3,
        },
        yaxis: {
          min: 0,
        },
        colors: ['#DCE6EC'],
      };

      const sparkline1 = new ApexCharts(document.querySelector('#sparkline-1'), option_sparkline1);
      sparkline1.render();

      const option_sparkline2 = {
        series: [
          {
            data: [515, 519, 520, 522, 652, 810, 370, 627, 319, 630, 921],
          },
        ],
        chart: {
          type: 'area',
          height: 50,
          sparkline: {
            enabled: true,
          },
        },
        stroke: {
          curve: 'straight',
        },
        fill: {
          opacity: 0.3,
        },
        yaxis: {
          min: 0,
        },
        colors: ['#DCE6EC'],
      };

      const sparkline2 = new ApexCharts(document.querySelector('#sparkline-2'), option_sparkline2);
      sparkline2.render();

      const option_sparkline3 = {
        series: [
          {
            data: [15, 19, 20, 22, 33, 27, 31, 27, 19, 30, 21],
          },
        ],
        chart: {
          type: 'area',
          height: 50,
          sparkline: {
            enabled: true,
          },
        },
        stroke: {
          curve: 'straight',
        },
        fill: {
          opacity: 0.3,
        },
        yaxis: {
          min: 0,
        },
        colors: ['#DCE6EC'],
      };

      const sparkline3 = new ApexCharts(document.querySelector('#sparkline-3'), option_sparkline3);
      sparkline3.render();
    </script>
    <!--end::Script-->
  </body>
  <!--end::Body-->
</html>
