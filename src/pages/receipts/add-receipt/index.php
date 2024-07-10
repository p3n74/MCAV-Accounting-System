<div class="GLOBAL_PAGE">
    <?php
    include_once __DIR__ . "/../../../components/sidebar.php";
    ?>

    <div class="GLOBAL_PAGE_CONTAINER">
        <div class="GLOBAL_HEADER">
            <div class="GLOBAL_HEADER_TITLE">
                <i class="material-symbols-rounded text-[42px]">
                    payments
                </i>
                <span class="">Add New Receipt</span>
            </div>
            <div class="GLOBAL_HEADER_USER">
                <div class="GLOBAL_HEADER_COLUMN">
                    <p>Hey, <strong class="text-black">Radon</strong></p>
                    <p>Admin</p>
                </div>
                <img src="/assets/JumanjiRon.png" alt="">
            </div>
        </div>

        <div class="CUSTOMERS_INFO">
            <div class="GLOBAL_SUBHEADER">
                <h1>Transaction Details</h1>
                <a onclick="window.history.back(); return false;">
                    <i class="material-symbols-rounded text-[#7F7F7F] text-3xl">
                        arrow_back
                    </i>
                </a>
            </div>

            <form action="" method="post">
                <div class="CUSTOMERS_INPUT GLOBAL_BOX_DIV">

                    <!-- Column 1 -->
                    <div class="CUSTOMERS_INPUT_COLUMN">
                        <!-- Payment Date -->
                        <div class="CUSTOMERS_INPUT_COLUMN_CONTAINER">
                            <label for="payment-date">Payment Date</label>
                            <div class="flex flex-row gap-2">
                                <input type="number" id="month" min="1" max="12" size="2" placeholder="Month" required>
                                <input type="number" id="day" min="1" max="31" size="2" placeholder="Day" required>
                                <input type="number" id="year" min="1900" max="2100" placeholder="Year" size="4" required>
                            </div>
                        </div>
                        <!-- Amount -->
                        <div class="CUSTOMERS_INPUT_COLUMN_CONTAINER">
                            <label for="amount">Amount</label>
                            <input type="number" id="amount" min="0" placeholder="Amount" required>
                        </div>
                    </div>

                    <!-- Column 2 -->
                    <div class="CUSTOMERS_INPUT_COLUMN">
                        <!-- Transaction Photo -->
                        <div class="CUSTOMERS_INPUT_COLUMN_CONTAINER">
                            <label>Transaction Picture</label>
                            <input id="fileInput" type="file" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:border-blue-500 focus:ring-blue-500 sm:text-sm">
                            <p class="mt-2 text-xs text-gray-500">Only .jpg, .png, files allowed</p>
                        </div>
                    </div>
                </div>

                <div class="flex flex-row justify-end pb-5">
                    <a href="/receipts" class="GLOBAL_BUTTON_GRAY mr-4">Cancel</a>
                    <a href="/receipts" class="GLOBAL_BUTTON_BLUE" onclick="scrollToSection('input')">Proceed</a>
                </div>
            </form>
        </div>
    </div>
</div>