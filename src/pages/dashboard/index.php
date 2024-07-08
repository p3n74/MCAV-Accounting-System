<div class="GLOBAL_PAGE">
    <?php
    include_once __DIR__ . "/../../components/sidebar.php";
    ?>

    <div class="GLOBAL_PAGE_CONTAINER">
        <div class="GLOBAL_HEADER">
            <div class="GLOBAL_HEADER_TITLE">
                <i class="material-symbols-rounded text-[42px]">
                    dashboard
                </i>
                <span>Dashboard</span>
            </div>
            <div class="GLOBAL_HEADER_USER">
                <div class="GLOBAL_HEADER_COLUMN">
                    <p class="text-sm text-[#7F7F7F]">Hey, <strong class="text-black">Radon</strong></p>
                    <p class="text-sm text-[#7F7F7F]">Admin</p>
                </div>
                <img src="/assets/JumanjiRon.png" alt="">
            </div>
        </div>

        <div class="GLOBAL_ANALYTICS">
            <div class="GLOBAL_SUBHEADER">
                <h1 class="GLOBAL_SUBHEADER_TITLE">Analytics</h1> 
            </div>
            <div class="GLOBAL_ANALYTICS_ROW">
                <div class="GLOBAL_ANALYTICS_CARD GLOBAL_BOX_DIV">
                    <h1 class="GLOBAL_ANALYTICS_CARD_TITLE">Monthly Sales</h1>
                    <h1 class="GLOBAL_ANALYTICS_CARD_VALUE">Php 65,521</h1>
                </div>
                <div class="GLOBAL_ANALYTICS_CARD GLOBAL_BOX_DIV">
                    <h1 class="GLOBAL_ANALYTICS_CARD_TITLE">Total Orders</h1>
                    <h1 class="GLOBAL_ANALYTICS_CARD_VALUE">1,002</h1>
                </div>
                <div class="GLOBAL_ANALYTICS_CARD GLOBAL_BOX_DIV">
                    <h1 class="GLOBAL_ANALYTICS_CARD_TITLE">Total Sales</h1>
                    <h1 class="GLOBAL_ANALYTICS_CARD_VALUE">Php 105,156</h1>
                </div>
            </div>
        </div>
    
        <div class="DASHBOARD_RECENT">
            <h1 class="GLOBAL_SUBHEADER_TITLE">Recent Orders</h1>
            <div class="GLOBAL_TABLE">
                <table>
                        <?php while ($row = $recentOrders->fetch_assoc()) { ?>
                            <tr>
                                <td><?php echo $row['Order ID']; ?></td>
                                <td><?php echo $row['Customer Name']; ?></td>
                                <td><?php echo $row['Order Date']; ?></td>
                                <td>$<?php echo number_format($row['Amount'], 2); ?></td>
                                <td><?php echo $row['Deadline']; ?></td>
                                <td><?php echo $row['Status']; ?></td>
                            </tr>
                        <?php } ?>
                        <td></td>
                    </tr>
                </table>
            </div>
            <a href="" class="DASHBOARD_RECENT_SHOW_A">Show all</a>
        </div>
    </div>
</div>

<?php
$conn->close();
?>