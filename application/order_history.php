<?php
session_start();
if ($_SESSION['user_name'] == false) {
  header('Location: ./login.php');
}
?>
<!DOCTYPE html>
<html lang="ja">


<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="熱帯魚の通販サイトです。">
  <meta name="keywords" content="熱帯魚, 魚, 水槽, ECサイト, 通販, オンラインショップ">
  <title>Auarium | 注文履歴</title>

  <?php include_once('./link.html'); ?>
</head>


<body>
  <div class="wrapper">
    <?php include_once('./header.html'); ?>


    <!-- メインコンテンツ -->
    <div class="contents">
      <div class="container my-5">

        <!-- Section -->
        <section>
          <!-- タイトル -->
          <h6 class="font-weight-bold text-center grey-text text-uppercase small mb-4">order history</h6>
          <h3 class="font-weight-bold text-center white-text pb-2">注文履歴</h3>
          <hr class="w-header white my-4">
        </section>
      </div>


      <!-- 注文履歴1 -->
      <div class="container white my-5 py-3 z-depth-1 rounded">

        <!--Section: Content-->
        <section class="dark-grey-text">

          <!-- Shopping Cart table -->
          <div class="table-responsive">

            <table class="table product-table mb-0">

              <!-- Table head -->
              <thead class="mdb-color lighten-5">
                <tr>
                  <th class="font-weight-bold">
                    <strong>注文日 2020/02/23</strong>
                  </th>
                  <th class="font-weight-bold">
                    <strong>商品名</strong>
                  </th>
                  <th class="font-weight-bold">
                    <strong>数量</strong>
                  </th>
                  <th class="font-weight-bold">
                    <strong>価格</strong>
                  </th>
                </tr>
              </thead>
              <!-- /.Table head -->

              <!-- Table body -->
              <tbody>

                <!-- First row -->
                <tr>
                  <th scope="row">
                    <img src="images/fish1.jpg" alt="" class="img-fluid z-depth-0">
                  </th>
                  <td>
                    <h5 class="mt-3">
                      <strong>エンゼルフィッシュ</strong>
                    </h5>
                  </td>
                  <td>
                    <strong>1</strong>
                  </td>
                  <td class="font-weight-bold">
                    <strong>￥800</strong>
                  </td>
                </tr>
                <!-- /.First row -->

                <!-- Second row -->
                <tr>
                  <th scope="row">
                    <img src="images/fish3.jpg" alt="" class="img-fluid z-depth-0">
                  </th>
                  <td>
                    <h5 class="mt-3">
                      <strong>プレコ</strong>
                    </h5>
                  </td>
                  <td>
                    <strong>1</strong>
                  </td>
                  <td class="font-weight-bold">
                    <strong>￥600</strong>
                </tr>
                <!-- /.Second row -->

                <!-- Third row -->
                <tr>
                  <th scope="row">
                    <img src="images/fish2.jpg" alt="" class="img-fluid z-depth-0">
                  </th>
                  <td>
                    <h5 class="mt-3">
                      <strong>コリドラスパンダ</strong>
                    </h5>
                  </td>
                  <td>
                    <strong>1</strong>
                  </td>
                  <td class="font-weight-bold">
                    <strong>￥1,200</strong>
                  </td>
                </tr>
                <!-- /.Third row -->

                <!-- Fourth row -->
                <tr>
                  <td>
                    <h4 class="mt-2">
                      <strong>注文番号 1111</strong>
                    </h4>
                  </td>
                  <td>
                    <h4 class="mt-2">
                      <strong>合計</strong>
                    </h4>
                  </td>
                  <td colspan="2">
                    <h4 class="mt-2">
                      <strong>￥2,600</strong>
                    </h4>
                  </td>
                </tr>
                <!-- Fourth row -->

              </tbody>
              <!-- /.Table body -->

            </table>

          </div>
          <!-- /.Shopping Cart table -->

        </section>
        <!--Section: Content-->

      </div>



      <!-- 注文履歴2 -->
      <div class="container white my-5 py-3 z-depth-1 rounded">

        <!--Section: Content-->
        <section class="dark-grey-text">

          <!-- Shopping Cart table -->
          <div class="table-responsive">

            <table class="table product-table mb-0">

              <!-- Table head -->
              <thead class="mdb-color lighten-5">
                <tr>
                  <th class="font-weight-bold">
                    <strong>注文日 2020/02/23</strong>
                  </th>
                  <th class="font-weight-bold">
                    <strong>商品名</strong>
                  </th>
                  <th class="font-weight-bold">
                    <strong>数量</strong>
                  </th>
                  <th class="font-weight-bold">
                    <strong>価格</strong>
                  </th>
                </tr>
              </thead>
              <!-- /.Table head -->

              <!-- Table body -->
              <tbody>

                <!-- First row -->
                <tr>
                  <th scope="row">
                    <img src="images/fish1.jpg" alt="" class="img-fluid z-depth-0">
                  </th>
                  <td>
                    <h5 class="mt-3">
                      <strong>エンゼルフィッシュ</strong>
                    </h5>
                  </td>
                  <td>
                    <strong>1</strong>
                  </td>
                  <td class="font-weight-bold">
                    <strong>￥800</strong>
                  </td>
                </tr>
                <!-- /.First row -->

                <!-- Second row -->
                <tr>
                  <th scope="row">
                    <img src="images/fish3.jpg" alt="" class="img-fluid z-depth-0">
                  </th>
                  <td>
                    <h5 class="mt-3">
                      <strong>プレコ</strong>
                    </h5>
                  </td>
                  <td>
                    <strong>1</strong>
                  </td>
                  <td class="font-weight-bold">
                    <strong>￥600</strong>
                </tr>
                <!-- /.Second row -->

                <!-- Third row -->
                <tr>
                  <th scope="row">
                    <img src="images/fish2.jpg" alt="" class="img-fluid z-depth-0">
                  </th>
                  <td>
                    <h5 class="mt-3">
                      <strong>コリドラスパンダ</strong>
                    </h5>
                  </td>
                  <td>
                    <strong>1</strong>
                  </td>
                  <td class="font-weight-bold">
                    <strong>￥1,200</strong>
                  </td>
                </tr>
                <!-- /.Third row -->

                <!-- Fourth row -->
                <tr>
                  <td>
                    <h4 class="mt-2">
                      <strong>注文番号 1111</strong>
                    </h4>
                  </td>
                  <td>
                    <h4 class="mt-2">
                      <strong>合計</strong>
                    </h4>
                  </td>
                  <td colspan="2">
                    <h4 class="mt-2">
                      <strong>￥2,600</strong>
                    </h4>
                  </td>
                </tr>
                <!-- Fourth row -->

              </tbody>
              <!-- /.Table body -->

            </table>

          </div>
          <!-- /.Shopping Cart table -->

        </section>
        <!--Section: Content-->

      </div>




      <!-- 注文履歴3 -->
      <div class="container white my-5 py-3 z-depth-1 rounded">

        <!--Section: Content-->
        <section class="dark-grey-text">

          <!-- Shopping Cart table -->
          <div class="table-responsive">

            <table class="table product-table mb-0">

              <!-- Table head -->
              <thead class="mdb-color lighten-5">
                <tr>
                  <th class="font-weight-bold">
                    <strong>注文日 2020/02/23</strong>
                  </th>
                  <th class="font-weight-bold">
                    <strong>商品名</strong>
                  </th>
                  <th class="font-weight-bold">
                    <strong>数量</strong>
                  </th>
                  <th class="font-weight-bold">
                    <strong>価格</strong>
                  </th>
                </tr>
              </thead>
              <!-- /.Table head -->

              <!-- Table body -->
              <tbody>

                <!-- First row -->
                <tr>
                  <th scope="row">
                    <img src="images/fish1.jpg" alt="" class="img-fluid z-depth-0">
                  </th>
                  <td>
                    <h5 class="mt-3">
                      <strong>エンゼルフィッシュ</strong>
                    </h5>
                  </td>
                  <td>
                    <strong>1</strong>
                  </td>
                  <td class="font-weight-bold">
                    <strong>￥800</strong>
                  </td>
                </tr>
                <!-- /.First row -->

                <!-- Second row -->
                <tr>
                  <th scope="row">
                    <img src="images/fish3.jpg" alt="" class="img-fluid z-depth-0">
                  </th>
                  <td>
                    <h5 class="mt-3">
                      <strong>プレコ</strong>
                    </h5>
                  </td>
                  <td>
                    <strong>1</strong>
                  </td>
                  <td class="font-weight-bold">
                    <strong>￥600</strong>
                </tr>
                <!-- /.Second row -->

                <!-- Third row -->
                <tr>
                  <th scope="row">
                    <img src="images/fish2.jpg" alt="" class="img-fluid z-depth-0">
                  </th>
                  <td>
                    <h5 class="mt-3">
                      <strong>コリドラスパンダ</strong>
                    </h5>
                  </td>
                  <td>
                    <strong>1</strong>
                  </td>
                  <td class="font-weight-bold">
                    <strong>￥1,200</strong>
                  </td>
                </tr>
                <!-- /.Third row -->

                <!-- Fourth row -->
                <tr>
                  <td>
                    <h4 class="mt-2">
                      <strong>注文番号 1111</strong>
                    </h4>
                  </td>
                  <td>
                    <h4 class="mt-2">
                      <strong>合計</strong>
                    </h4>
                  </td>
                  <td colspan="2">
                    <h4 class="mt-2">
                      <strong>￥2,600</strong>
                    </h4>
                  </td>
                </tr>
                <!-- Fourth row -->

              </tbody>
              <!-- /.Table body -->

            </table>

          </div>
          <!-- /.Shopping Cart table -->

        </section>
        <!--Section: Content-->

      </div>



    </div>

    <?php include_once('./footer.html'); ?>
  </div>

  <?php include_once('./script.html'); ?>
</body>

</html>
