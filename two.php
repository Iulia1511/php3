<?php //1.4
$transactions = [
    [
        "transaction_id" => 1,
        "transaction_date" => "2019-01-01",
        "transaction_amount" => 100.00,
        "transaction_description" => "Payment for groceries",
        "merchant_name" => "SuperMart",
    ],
    [
        "transaction_id" => 2,
        "transaction_date" => "2020-02-15",
        "transaction_amount" => 75.50,
        "transaction_description" => "Dinner with friends",
        "merchant_name" => "Local restaurant",
    ],
    [
        "transaction_id" => 3,
        "transaction_date" => "2020-02-20",
        "transaction_amount" => 50.25,
        "transaction_description" => "Online shopping",
        "merchant_name" => "Amazon",
    ],
    [
        "transaction_id" => 4,
        "transaction_date" => "2020-03-05",
        "transaction_amount" => 120.00,
        "transaction_description" => "Gas refill",
        "merchant_name" => "Gas station",
    ],
];
?>
<table border="1">
    <tr style="background-color: #a6a6a6; color: #252525 ">
        <th colspan="5">Оценки студентов</th>
    </tr>
    <tr style="background-color: #a6a6a6; color: #252525 ">
        <th>Id</th>
        <th>Дата</th>
        <th>Сумма транзакции</th>
        <th>Описание транзакции</th>
        <th>Название организации</th>
    </tr>
    <?php foreach ($transactions as $transaction) { ?>
        <tr>
            <td><?php echo $transaction["transaction_id"]; ?></td>
            <td><?php echo $transaction["transaction_date"]; ?></td>
            <td><?php echo $transaction["transaction_amount"]; ?></td>
            <td><?php echo $transaction["transaction_description"]; ?></td>
            <td><?php echo $transaction["merchant_name"]; ?></td>
        </tr>
    <?php } ?>
</table>
<?php

// Определение массива с данными о транзакциях
$transactions = [
    [
        "transaction_id" => 1,
        "transaction_date" => "2019-01-01",
        "transaction_amount" => 100.00,
        "transaction_description" => "Payment for groceries",
        "merchant_name" => "SuperMart",
    ],
    [
        "transaction_id" => 2,
        "transaction_date" => "2020-02-15",
        "transaction_amount" => 75.50,
        "transaction_description" => "Dinner with friends",
        "merchant_name" => "Local restaurant",
    ],
    [
        "transaction_id" => 3,
        "transaction_date" => "2020-02-20",
        "transaction_amount" => 50.25,
        "transaction_description" => "Online shopping",
        "merchant_name" => "Amazon",
    ],
    [
        "transaction_id" => 4,
        "transaction_date" => "2020-03-05",
        "transaction_amount" => 120.00,
        "transaction_description" => "Gas refill",
        "merchant_name" => "Gas station",
    ],
];

// Функция для рассчета общей суммы всех транзакций
function calculateTotalAmount($transactions) {
    return array_reduce($transactions, function($acc, $transaction) {
        return $acc + $transaction["transaction_amount"];
    }, 0);
}

// Функция для рассчета среднего арифметического всех транзакций
function calculateAverage($transactions) {
    $totalAmount = calculateTotalAmount($transactions);
    return $totalAmount / count($transactions);
}

// Функция для возврата массива с описаниями транзакций
function mapTransactionDescriptions($transactions) {
    return array_map(function($transaction) {
        return $transaction["transaction_description"];
    }, $transactions);
}

// Вывод результатов на экран
echo "Общая сумма всех транзакций: " . calculateTotalAmount($transactions) . "<br>";
echo "Среднее арифметическое всех транзакций: " . calculateAverage($transactions) . "<br>";
echo "Описания всех транзакций: " . implode(", ", mapTransactionDescriptions($transactions));

?>

