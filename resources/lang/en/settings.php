<?php


return[
   'business' => 'business',
   'company' => 'company',
   'register' => 'register',
   'site' => 'site',
   'payment' => 'payment',

   'labels' => [
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

      'site' => [
        'name' => 'company name',
        'id' => 'company id',
        'currency' => 'company currency',
        'address' => 'company address',
        'email' => 'company email',
        'phone' => 'company phone',
        'pin' => 'company pin',
        'logo' => 'company logo',
        'footer' => 'company footer',
        'activitylog' => 'Record website activityLog?',
      ],

      'register' => [
          'disabled' => 'disable new registration?',
          'free' => 'is registration free?',
          'require_sponsor' => 'sponsor required?',
          'require_email' => 'email required?',
          'require_phone' => 'phone required?',
          'email_use' => 'Max. one e-mail use',
          'phone_use' => 'Max. one phone use',
          'password' => "allow user's to enter password",
          'show_position' => 'show position on registration',
          'show_products' => 'show product on registration',
          'show_legs' => 'show legs on registration',
          'send_sms' => 'send sms on registration',
          'send_mail' => 'send mail on registration',
          'status' => 'registration status',
          'show_video' => 'Show video on registration',
          'video_link' => 'Video link',
          'fields' => 'select extra fields',
      ],

      'marketing' => [
         'mail_host' => 'Mail host',
         'mail_port' => 'Mail port',
         'mail_encryption' => 'Mail encryption',
         'mail_username' => 'Mail username',
         'mail_password' => 'Mail password',
         'mail_from' => 'Mail from',
         'mail_from_address' => 'Mail from address',
         'sms' => "SMS API ({message},{mobile})",
      ],
   ],

   'messages' => [
     'readme' => 'changing settings can reload your system!! Careful',
   ],

   'buttons' => [
     'update' => 'update settings',
   ],
];
