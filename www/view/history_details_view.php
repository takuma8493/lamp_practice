<!DOCTYPE html>
<html lang="ja">

<head>
  <?php include VIEW_PATH . 'templates/head.php'; ?>
  <title>履歴詳細</title>
  <link rel="stylesheet" href="<?php print(STYLESHEET_PATH . 'cart.css'); ?>">
</head>

<body>
  <?php include VIEW_PATH . 'templates/header_logined.php'; ?>
  <h1>履歴詳細</h1>
  <div class="container">

    <?php include VIEW_PATH . 'templates/messages.php'; ?>

    <?php if (!empty($history_details)) { ?>
      <table class="table table-bordered">
        <thead class="thead-light">
          <tr>
            <th>商品名</th>
            <th>購入時の商品価格</th>
            <th>購入数</th>
            <th>小計</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($history_details as $details) { ?>
            <tr>
              <td><?php print(h($details['name'])); ?></td>
              <td><?php print(h($details['price'])); ?>円</td>
              <td><?php print(number_format(h($details['amount']))); ?>個</td>
              <td><?php print(number_format(h((float)$details['order_price']))); ?>円</td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    <?php } ?>

  </div>
</body>

</html>