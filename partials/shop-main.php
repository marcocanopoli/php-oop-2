<main>
    <?php 
    // require_once __DIR__ . '/../classes/user/Person.php'; 
    require_once __DIR__ . '/../classes/user/PremiumUser.php';
    require_once __DIR__ . '/../classes/CreditCard.php'; 
    require_once __DIR__ . '/../classes/product/Product.php';    
    
    $premiumUser = new PremiumUser('Marco', 'Canopoli', 'canopoli.marco@gmail.com', '25-08-1991', 'marcocanopoli', 'password');
    $premiumUser->addOrder('987349');
    $premiumUser->setDiscount();
    $premiumUser->setAddress('Via Roma 5, Milano (MI) 20100');
    $card_1 = new CreditCard('Mario Rossi', '1245987526548754', '30-12-2025', '548');
    $wallet_1 = new Wallet();
    $wallet_1->setBalance(150);
    $wallet_1->addCard('American Express', $card_1);
    $premiumUser->setWallet($wallet_1);
    var_dump($premiumUser);
    var_dump($premiumUser->getWallet());
    ?>
</main>