<?php



require 'header.php';

$usuario=$_SESSION['usuario'];
$creditos=$_SESSION['creditos'];
$fecha=$_SESSION['fecha'];
$lives=$_SESSION['lives'];
$deads=$_SESSION['deads'];


?>

      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">

          <div class="row">
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
              <div class="card card-stats" style=" -webkit-box-shadow: 2px 2px 5px #000;
          -moz-box-shadow: 2px 2px 5px #000;
          filter: shadow(color=#000000, direction=135, strength=2);">
                <div class="card-header card-header-warning card-header-icon" >
                  <div class="card-icon">
                    <i class="material-icons">account_balance_wallet</i>
                  </div>
                  <p class="card-category" style="font-weight:bold; color:black">CREDITOS</p>
                  <h3 class="card-title" style="font-weight:bold; color:black"><?php echo $creditos; ?>
                    <!-- <small>CREDITOS DEL CHEKER</small> -->
                  </h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons text-warning">warning</i>
                    <a href="#" class="warning-link">Recargar Créditos...</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
              <div class="card card-stats" style="  -webkit-box-shadow: 2px 2px 5px #000;
          -moz-box-shadow: 2px 2px 5px #000;
          filter: shadow(color=#000000, direction=135, strength=2);">
                <div class="card-header card-header-success card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">credit_score</i>
                  </div>
                  <p class="card-category" style="font-weight:bold; color:black">Lives</p>
                  <h3 class="card-title" style="font-weight:bold; color:black"><?php echo $lives; ?></h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">visibility</i> Ver
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
              <div class="card card-stats" style="   -webkit-box-shadow: 2px 2px 5px #000;
          -moz-box-shadow: 2px 2px 5px #000;
          filter: shadow(color=#000000, direction=135, strength=2);">
                <div class="card-header card-header-danger card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">credit_card_off</i>
                  </div>
                  <p class="card-category" style="font-weight:bold; color:black">Deads</p>
                  <h3 class="card-title" style="font-weight:bold; color:black"><?php echo $deads; ?></h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">visibility</i> Ver
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
              <div class="card card-stats" style="   -webkit-box-shadow: 2px 2px 5px #000;
          -moz-box-shadow: 2px 2px 5px #000;
          filter: shadow(color=#000000, direction=135, strength=2);">
                <div class="card-header card-header-info card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">bathroom</i>
                  </div>
                  <p class="card-category" style="font-weight:bold; color:black">Bins</p>
                  <h3 class="card-title" style="font-weight:bold; color:black">---</h3>
                </div>
                <div class="card-footer">
                  <div class="stats" style="font-weight:bold; color:black">
                    <i class="material-icons">visibility</i> Ver
                  </div>
                </div>
              </div>
            </div>
          </div>



          <div class="row">
            <div class="col-lg-6 col-md-12">
              <div class="card" style="-webkit-box-shadow: 2px 2px 5px #000;
          -moz-box-shadow: 2px 2px 5px #000;
          filter: shadow(color=#000000, direction=135, strength=2);">
                <div class="card-header card-header-primary"><span class="material-icons">motion_photos_auto</span>
                  <h4 class="card-title">Ultimas lives</h4>
                  <p class="card-category">OLYMPUS CHEKER</p>
                </div>
                <div class="card-body table-responsive" style="    -webkit-box-shadow: 2px 2px 5px #000;
            -moz-box-shadow: 2px 2px 5px #000;
            filter: shadow(color=#000000, direction=135, strength=2);">
                  <table class="table table-hover">
                    <tbody>
                      <tr>


                        <td>438108</td>
                        <td>4381080000000000|01|2022|000</td>
                      </tr>
                      <tr>


                        <td>376653</td>
                        <td>3766530000000000|02|2022|000</td>
                      </tr>
                      <tr>

                        <td>421410</td>
                        <td>4214100000000000|02|2022|000</td>
                      </tr>
                      <tr>

                        <td>421410</td>
                        <td>4214100000000000|02|2022|000</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-12">
              <div class="gates" style="  -webkit-box-shadow: 2px 2px 5px #000;
          -moz-box-shadow: 2px 2px 5px #000;
          filter: shadow(color=#000000, direction=135, strength=2);">
                <div class="card-header card-header-tabs card-header-warning">
                  <div class="nav-tabs-navigation">
                    <div class="nav-tabs-wrapper">
                      <span class="nav-tabs-title">GATES:</span>
                      <ul class="nav nav-tabs" data-tabs="tabs">
                        <li class="nav-cc">
                          <a class="nav-cc active" href="#profile" data-toggle="tab">
                            <i class="material-icons">credit_card</i> cc
                            <div class="ripple-container"></div>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="card-body" style="   -webkit-box-shadow: 2px 2px 5px #000;
            -moz-box-shadow: 2px 2px 5px #000;
            filter: shadow(color=#000000, direction=135, strength=2);">
                  <div class="tab-content">
                    <div class="tab-pane active" id="profile">
                      <table class="table">
                        <tbody>
                          <tr>
                            <td>
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input class="form-check-input" type="checkbox" value="" checked>
                                  <span class="form-check-sign">
                                    <span class="check"></span>
                                  </span>
                                </label>
                              </div>
                            </td>
                            <td>ATENEA " VISA - MC - DINERS - AMEX "</td>

                          </tr>
                          <tr>
                            <td>
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input class="form-check-input" type="checkbox" value="" checked>
                                  <span class="form-check-sign">
                                    <span class="check"></span>
                                  </span>
                                </label>
                              </div>
                            </td>
                            <td>DIONICIO " VISA - MC - DINERS - AMEX "</td>

                          </tr>
                          <tr>
                            <td>
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input class="form-check-input" type="checkbox" value="" checked>
                                  <span class="form-check-sign">
                                    <span class="check"></span>
                                  </span>
                                </label>
                              </div>
                            </td>
                            <td>PAN " VISA - MC - DINERS - AMEX "

                          </tr>
                          <tr>
                            <td>
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input class="form-check-input" type="checkbox" value="" checked>
                                  <span class="form-check-sign">
                                    <span class="check"></span>
                                  </span>
                                </label>
                              </div>
                            </td>
                            <td>ARTEMISA " VISA - MC - DINERS - AMEX "</td>
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


<?php
require 'footer.php';
?>

<script src="scripts/dashboard.js"></script>
