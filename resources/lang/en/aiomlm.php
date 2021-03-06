<?php

return  [
    'rankAchiever' => [
       'title' => 'rank achievers',
       'id'   => 's/n',
       'created_at'   => 'achieved at',
       'user'=> ['id'=>'user id'],
       'rank'=> ['name'=>'rank name'],

    ],
    'investment'=> [
      'title'  => ':status investments',
      'id' => 's/n',
      'user'  => ['id'=>'user id'],
      'product'  => ['id'=>'product id', 'name'=>'product name', 'price'=>'amount' ],
      'status'   => 'status',
    ],
    'rank' => [
      'title' => ':status Ranks',
      'id'  => 's/n',
      'name'  => 'name',
      'basedon'  => 'based on',
      'duration'  => 'duration',
      'fee'  => 'entry fee',
      'A'  => 'A(how many members/pv/bv)',
      'B'  => 'B(how many members/pv/bv)',
      'C'  => 'C(how many members/pv/bv)',
      'D'  => 'D(how many members/pv/bv)',
      'E'  => 'E(how many members/pv/bv)',
      'sponsors'  => 'sponsors',
      'achievers'  => 'achievers',
      'downlines'  => 'downlines',
      'level'  => 'level',
      'status'  => 'status',
      'fields'  => 'Set rewards',
      'pay_basedon' => 'pay basedon',
      'direct_income' => 'direct income',
      'indirect_income' => 'indirect income',
      'matching_income' => 'matching income',
      'level_income' => 'level income',
      'capping' => 'capping',
    ],
    'walletHistory' =>[
      'title' => ':status wallet histories',
      'id'   => 's/n',
      'user_id' => 'User id',
      'from'    => 'transction from',
      'by'      => 'transction by',
      'unique_id' => 'Unique Id',
      'status'   => 'status',
      'amount'   => 'amount',
      'balance'   => 'balance',
      'to'   => 'transfer to',
    ],
     'withdraw' => [
        'title' => ':status Withdraws',
        'id'    => 's/n',
        'user_id' => 'userid',
        'amount'  => 'amount',
        'status'  => 'status',
        'tax'  => 'tax',
        'details'  => 'details',
     ],
    'earning' => [
      'title'  => ':status Earnings',
      'id' => 's/n',
      'user_id' => 'userid',
      'amount'  => 'amount',
      'ref_id' => 'ref Id',
      'type'   => 'income name',
      'pair_match' => 'pair match',
      'secret' => 'secret',
      'status' => 'status',
      'withdraw-note' => 'Note: You are about to withdraw balance for all users.',
    ],
    'business' => [
      'title' => 'Business settings',
      'leg' => 'how many legs to show',
      'epin' => 'enable E-pin system?',
      'pg' => 'enable payment gateways?',
      'topup' => 'enable TopUp system?',
      'topup_income' => 'give income on totup?',
      'product' => 'enable product system?',
      'repurchase' => 'enable repurchase system?',
      'reward' => 'enable reward system?',
      'rank' => 'enable rank system?',
      'wallet' => 'enable wallet system?',
      'donation' => 'enable donation system?',
      'ads' => 'enable advertise system?',
      'level' => 'enable level system?',
      'inv' => 'enable ROI system?',
      'inv_mode' => 'investment mode?',
    ],

    'binary' => [
       'title' => 'Binary settings',
       '1st_ratio'  => 'Binary 1st ratio',
       '2nd_ratio'  => 'Binary 2nd ratio',
       'first_matching_income' => 'First matching income',
    ],

    'site' => [
      'title' => 'Site settings',
      'name' => 'company name',
      'id' => 'company id',
      'currency' => 'company currency(eg: $, ₹)',
      'currency_code' => 'currency code(eg : USD, INR)',
      'address' => 'company address',
      'email' => 'company email',
      'phone' => 'company phone',
      'pin' => 'company pin',
      'logo' => 'company logo',
      'footer' => 'company footer',
      'activitylog' => 'Record website activityLog?',
    ],

    'register' => [
        'title' => 'register settings',
        'disabled' => 'disable new registration?',
        'free' => 'is registration free?',
        'epin' => 'show epin',
        'pg' => 'show payment gateways',
        'require_sponsor' => 'sponsor required?',
        'require_email' => 'email required?',
        'require_phone' => 'phone required?',
        'email_use' => 'Max. one e-mail use(-1 : unlimited)',
        'phone_use' => 'Max. one phone use(-1 : unlimited)',
        'password' => "allow user's to enter password",
        'show_products' => 'show product on registration',
        'mark_order' => 'automatically mark order complated?',
        'show_position' => 'show position on registration',
        'autopool' => 'autopool position?',
        'show_legs' => 'show legs on registration',
        'send_sms' => 'send sms on registration',
        'send_mail' => 'send mail on registration',
        'status' => 'registration status',
        'show_video' => 'Show video on registration',
        'video_link' => 'Video link',
        'fields' => 'select profile fields',
        'user_id' => 'user Id',
        'city'   => 'city',
        'pin'   => 'pin',
        'district'   => 'district',
        'state'   => 'state',
        'country'   => 'country',
        'address'   => 'address',
        'phonepe'   => 'phonepe',
        'gpay'   => 'gpay',
        'paytm'   => 'paytm',
        'paypal'   => 'paypal',
        'cashapp'   => 'cashapp',
        'applepay'   => 'applepay',
        'venmo'   => 'venmo',
        'btc_address'   => 'btc address',
        'bank_ac_no'   => 'bank a/c no',
        'bank_ac_holder'   => 'bank a/c holder',
        'bank_ac_ifsc'   => 'bank a/c ifsc',
        'bank_ac_branch'   => 'bank a/c branch',
        'pan_no'   => 'PAN number',
        'pan_name'   => 'name on PAN',
        'aadhar_no'   => 'Aadhar number',
        'dob'   => 'date of birth',
        'gstin'   => 'GSTIN',
        'tax_no'   => 'TAX number',
        'id_proof_pic'   => 'Id proof picture',
        'address_proof_pic'   => 'address proof picture',

        'epin-used' => 'epin already used',
        'epin-pg-needed' => 'epin or payment gateway must be enabled for paid registration! contact admin',
        'product-needed' => 'product must be enabled for paid registration! contact admin',
        'epin-value-less' => 'epin value is less than product price(with GST)',
        'autopool-failed' => 'faild to find autopool position or leg contact admin',
        'failed' => 'Registration failed for some reason, please try again or contact admin!',
        'completed' => 'Registration successfully completed! Please not the user details for login',
    ],

    'marketing' => [
       'title' => 'marketing settings',
       'mail_host' => 'Mail host',
       'mail_port' => 'Mail port',
       'mail_encryption' => 'Mail encryption',
       'mail_username' => 'Mail username',
       'mail_password' => 'Mail password',
       'mail_from' => 'Mail from',
       'mail_from_address' => 'Mail from address',
       'sms' => "SMS API ({message},{mobile})",
    ],

    'payment' => [
      'title' => 'payment settings',
      'razorpay' => 'enable razorpay?',
      'razorpay_mode' => 'razorpay mode',
      'razorpay_id' => 'razorpay id',
      'razorpay_secret' => 'razorpay secret',
      'select-gateway' => 'select a payment gateway',
      'pay-with' => 'pay with :attr',
      'error' => 'payment can not be completed! please contact admin',
      'failed' => 'payment faild with some reason, id fault please contact admin!',
      'success' => 'payment confirmed successfully!',

      'paypal' => 'enable paypal?',
      'paypal_mode' => 'paypal mode',
      'paypal_email' => 'paypal email',
      'paypal_client_id' => 'paypal client id',
      'paypal_client_secret' => 'paypal client secret',
      'paypal_app_id' => 'paypal app id',
      'paypal-redirect-info' => 'you are redirecting sucurly to http://paypal.com',

    ],

    'role' => [
       'title' => 'roles',
       'id'  => 'role id',
       'name'  => 'role name',
       'guard_name'  => 'guard name',
       'created_at'  => 'created at',
     ],

     'permission' => [
        'title' => 'permissions',
        'id'  => 'permission id',
        'name'  => 'permission name',
        'guard_name'  => 'guard name',
        'roles'  => 'roles',
        'created_at'  => 'created at',
      ],

    'right-sidebar' =>  [
      'title' => 'notifications',
    ],

    'footer' => [
       'copyright'  => 'copyright 2020 @ '
    ],


    'navs' => [
      'account' => 'account',
      'profile' => 'profile',
    ],

    'donations' => [
      'title' => 'donations',
    ],

   'boards' => [
     'title' => 'board',
     'champion' => 'champion',
     'waiting' => 'waiting',
     'one' => 'Board-one',
     'two' => 'Board-two',
     'three' => 'Board-three',
   ],

    'messages'  => [
       'woops' => 'woops something went wrong',
       'not-found' => ':attr not found in the records!',
       'success' => ':attr successfully',
       'not-updated' => ':attr not updated',
       'payment-sent' => "Payment status marked as sent successfully, please wait till the reciever's confirmation!!",
       'please-confirm-donation' => 'please confirm the payment(as soon as options avaiable) if you have got the payment!!'
    ],

    'dashboard' => [
      'total_users' => 'total members',
      'active_users' => 'active members',
      'total_earnings' => 'total earnings',
      'member_earnings' => 'member earnings',
    ],

    'epin' => [
      'title' => ':status E-pins',
      'id' => 's/n',
      'count' => 'how many epins',
      'epin'  => 'epin',
      'amount'  => 'amount',
      'type'  => 'type',
      'to'  => 'issue to(user id)',
      'by'  => 'generated by',
      'from'  => 'transfer from',
      'transfer_time'  => 'transfer time',
      'used_by'  => 'used by',
      'used_time'  => 'used time',
      'status'  => 'status',
      'created_at'  => 'generated time',
      'less-value'  => 'epin value is less than product price.',
    ],

    'member'  => [
      'id'  => 'user ID',
      'title'  => 'members',
      'name' => 'name',
      'phone' => 'phone',
      'email' => 'email',
      'sponsor' => 'sponsor',
      'position' => 'position',
      'created_at' => 'join date',
      'status' => 'status',
      'wallet'  => [
        'balance' => 'balance'
      ],
      'total_a,total_b,total_c,total_d,total_e' => 'Total downline',
    ],

    'user'  => [
      'id'  => 'user ID',
      'title'  => ':status user',
      'excel'  => 'Export method',
      'name' => 'name',
      'status' => 'status',
      'phone' => 'phone',
      'email' => 'email',
      'avatar' => 'avatar',
      'sponsor' => 'sponsor',
      'position' => 'position',
      'created_at' => 'join date',
      'status' => 'status',
      'export' => 'export method',
      'wallet'  => [
        'balance' => 'balance'
      ],
      'new-password' => 'new password',
      'password-confirm' => 'confirm password',
      'total_a,total_b,total_c,total_d,total_e' => 'Total downline',
    ],

    'profile' => [
       'title' => 'profile',
       'id' => 'profile Id',
       'user_id' => 'user Id',
       'city'   => 'city',
       'pin'   => 'pin',
       'district'   => 'district',
       'state'   => 'state',
       'counrty'   => 'counrty',
       'address'   => 'address',
       'phonepe'   => 'phonepe',
       'gpay'   => 'gpay',
       'paytm'   => 'paytm',
       'paypal'   => 'paypal',
       'cashapp'   => 'cashapp',
       'applepay'   => 'applepay',
       'venmo'   => 'venmo',
       'btc_address'   => 'btc address',
       'bank_ac_no'   => 'bank a/c no',
       'bank_ac_holder'   => 'bank a/c holder',
       'bank_ac_ifsc'   => 'bank a/c ifsc',
       'bank_ac_branch'   => 'bank a/c branch',
       'pan_no'   => 'PAN number',
       'pan_name'   => 'name on PAN',
       'aadhar_no'   => 'Aadhar number',
       'dob'   => 'date of birth',
       'gstin'   => 'GSTIN',
       'tax_no'   => 'TAX number',
       'id_proof_pic'   => 'Id proof picture',
       'address_proof_pic'   => 'address proof picture',
    ],

    'permissions' => [
      'title' => 'permissions',
      'name'  => 'permission name',
      'guard'  => 'permission guard',
      'edit'  => 'edit permission',
    ],
    'roles' => [
      'title' => 'roles',
      'name'  => 'role name',
      'guard'  => 'role guard',
      'edit'  => 'edit role',
    ],

    'table' => [
      'fields' => 'select extra fields',
      'no-data' => 'no-data',
      'search' => 'search',
      'show' => 'show',
      'type' => 'type',
      'entries' => 'entries',
      'id' => 'ID',
      'actions' => 'actions',
      'userid'  => 'userid',
      'name'   => 'name',
      'phone'   => 'phone',
      'email'   => 'email',
      'sponsor'   => 'sponsor',
      'position'   => 'position',
      'downline'   => 'downline',
      'position_name'   => 'Position',
      'pay_to'   => 'champion userid',
      'paid'   => 'paid',
      'payer_id_A'   => 'payer id A',
      'payer_id_B'   => 'payer id B',
      'payer_id_C'   => 'payer id C',
      'payer_id_D'   => 'payer id D',

      'amount'   => 'amount',
      'from'   => 'from userid',
      'to'   => 'to userid',
      'status'   => 'status',

      'created_at'   => 'created at',
    ],

    'product' => [
      'title' => 'products',
      'id' => 'id',
      'name' => 'name',
      'price' => 'price',
      'dealer_price' => 'dealer price',
      'description' => 'description',
      'pv' => 'point value',
      'qty' => 'quantity(-1 == unlimited)',
      'gst' => 'gst(%)',
      'image' => 'image',
      'show_on_reg' => 'show on Reg.?',
      'direct_income' => 'sponsor income',
      'indirect_income' => 'indirect sponsor income',
      'level_income' => 'level income(seperate , for every level)',
      'matching_income' => 'matching income',
      'capping' => 'capping(day)',
      'roi' => 'ROI',
      'roi_frequency' => 'ROI frequency(in hour)',
      'roi_limit' => 'ROI limit(numbers)',
      'sold' => 'solds',
      'status' => 'status',
      'pay_basedon' => 'pay based on',
      'fields' => 'setting income for this product?',
    ],

    'buttons' => [
      'edit-profile' => 'edit profile',
      'edit-account' => 'edit account',
      'export' => 'export(xlsx)',
      'login' => 'login',
      'add' => 'add',
      'deactivate' => 'deactivate',
      'hold' => 'hold',
      'approve' => 'approve',
      'generate-payouts' => 'generate payouts',
      'unhold' => 'unhold',
      'transferBalance' => 'transfer funds',
      'checkBalance' => 'checkBalance',
      'save' => 'save',
      'addBalance' => 'addBalance',
      'removeBalance' => 'removeBalance',
      'edit' => 'edit',
      'login' => 'login',
      'delete' => 'delete',
      'create' => 'create',
      'update' => 'update',
      'sure' => 'sure?',
      'payall' => 'payall',
      'confirm' => 'confirm',
      'rematch' => 'rematch',
      'send' => 'send',
      'wait' => 'please wait',
      'click' => 'click here',
      'pay' => 'pay',
      'transferNow' => 'transfer now',
      'delete-selected' => 'delete',
    ],
  ];
