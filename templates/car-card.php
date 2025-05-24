<?php
function renderCarCard($car) {
?>
    <div class="car-card">
        <img src="img/<?php echo htmlspecialchars($car['image']); ?>" alt="Hình xe">
        <h3><?php echo htmlspecialchars($car['name']); ?></h3>
        <p>Giá: <?php echo number_format($car['price'], 0, ',', '.'); ?> VNĐ</p>
        <a href="#">Chi tiết</a>
    </div>
<?php
}
?>