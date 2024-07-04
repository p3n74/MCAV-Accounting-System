<div class="GLOBAL_PAGE">
    <?php
    include_once __DIR__ . "/../../components/sidebar.php";
    ?>

    <div class="GLOBAL_PAGE_CONTAINER">
        <div class="GLOBAL_HEADER">
            <div class="GLOBAL_HEADER_TITLE">
                <i class="material-symbols-rounded text-[42px]">
                    receipt_long
                </i>
                <span>Order Management</span>
                <button class="GLOBAL_BUTTON_BLUE ml-5">Add order</button>
            </div>
            <div>
                <div class="GLOBAL_HEADER_COLUMN">
                    <p>Hey, <strong>Radon</strong></p>
                    <p>Admin</p>
                </div>
            </div>
        </div>

        <div class="ORDERS_SEARCH">
            <div class="columns-1">
                <a href="">
                    <i class="material-symbols-rounded">
                        search
                    </i>
                </a>
                <input type="text" placeholder="Search">
            </div>
        </div>

        <div class="ORDERS_CONTENT">
            <div class="GLOBAL_TABLE">
                <table>
                    <tr>
                        <th>#</th>
                        <th>Order ID</th>
                        <th>Customer</th>
                        <th>Product Description</th>
                        <th>Qty</th>
                        <th>Order Date</th>
                        <th>Amount</th>
                        <th>Date Released</th>
                        <th>Status</th>
                        <th>Remarks</th>
                    </tr>
                    <tr>
                        <td></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>