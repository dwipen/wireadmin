<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

class Settings extends Component
{
    use WithFileUploads;

    public $modal, $prefix, $inputs=[], $site=[], $business=[], $binary=[], $register=[], $marketing=[], $payment=[];
    public $buttons = [
      'save' => ['method'=>'save', 'class'=>'success'],
    ];

    public $extraInputs, $showFields, $logo, $marquee='messages.settings-warning';

    public function mount()
    {
      $this->fill(request()->only('prefix'));
      $this->mapValues();
      $this->setInputs();
    }
    public function setInputs()
    {
       if ($this->prefix==='site') {
         $this->inputs['name']  = ['type' => 'text'];
         $this->inputs['currency']  = ['type' => 'text'];
         $this->inputs['currency_code']  = ['type' => 'text'];
         $this->inputs['address']  = ['type' => 'text'];
         $this->inputs['email']  = ['type' => 'email'];
         $this->inputs['phone']  = ['type' => 'number'];
         $this->inputs['pin']  = ['type' => 'number'];
         $this->inputs['logo']  = ['type' => 'file'];
         $this->inputs['footer']  = ['type' => 'text'];
         $this->inputs['activitylog']  = ['type' => 'select', 'options' => ['false', 'true']];
       }
       elseif ($this->prefix === 'business') {
          $this->inputs['leg']  = ['type' => 'select', 'options' => ['1','2','3','4','5']];
          $this->inputs['epin']  = ['type' => 'select', 'options' => ['false','true']];
          $this->inputs['pg']  = ['type' => 'select', 'options' => ['false','true']];
          $this->inputs['topup']  = ['type' => 'select', 'options' => ['false','true']];
          $this->inputs['topup_income']  = ['type' => 'select', 'options' => ['false','true']];
          $this->inputs['product']  = ['type' => 'select', 'options' => ['false','true']];
          $this->inputs['repurchase']  = ['type' => 'select', 'options' => ['false','true']];
          $this->inputs['reward']  = ['type' => 'select', 'options' => ['false','true']];
          $this->inputs['rank']  = ['type' => 'select', 'options' => ['false','true']];
          $this->inputs['wallet']  = ['type' => 'select', 'options' => ['false','true']];
          $this->inputs['level']  = ['type' => 'select', 'options' => ['false','true']];
          $this->inputs['inv']  = ['type' => 'select', 'options' => ['false','true']];
          $this->inputs['inv_mode']  = ['type' => 'select', 'options' => ['select', 'auto', 'manual']];
          $this->inputs['donation']  = ['type' => 'select', 'options' => ['false','true']];
          $this->inputs['ads']  = ['type' => 'select', 'options' => ['false','true']];
       }
       elseif ($this->prefix==='binary') {
         $this->inputs['1st_ratio']  = ['type' => 'select', 'options' => [1,2]];
         $this->inputs['2nd_ratio']  = ['type' => 'select', 'options' => [1,2]];
         $this->inputs['first_matching_income']  = ['type'=>'number'];
       }
       elseif ($this->prefix === 'register') {
         $this->inputs['disabled']  = ['type' => 'select', 'options' => ['false', 'true'], 'defer'=>true];
         $this->inputs['free']  = ['type' => 'select', 'options' => ['false', 'true'], 'defer'=>true];
         if (setting('business.epin')) {
           $this->inputs['epin']  = ['type' => 'select', 'options' => ['false', 'true'], 'defer'=>true];
         }
         if (setting('business.pg')) {
           $this->inputs['pg']  = ['type' => 'select', 'options' => ['false', 'true'], 'defer'=>true];
         }
         $this->inputs['require_sponsor']  = ['type' => 'select', 'options' => ['false', 'true'], 'defer'=>true];
         $this->inputs['require_email']  = ['type' => 'select', 'options' => ['false', 'true'], 'defer'=>true];
         $this->inputs['require_phone']  = ['type' => 'select', 'options' => ['false', 'true'], 'defer'=>true];
         $this->inputs['email_use']  = ['type' => 'number', 'defer'=>true];
         $this->inputs['phone_use']  = ['type' => 'number', 'defer'=>true];
         $this->inputs['password']  = ['type' => 'select', 'options' => ['false', 'true'], 'defer'=>true];
         $this->inputs['show_position']  = ['type' => 'select', 'options' => ['false', 'true'], 'defer'=>true];
         $this->inputs['autopool']  = ['type' => 'select', 'options' => ['false', 'true'], 'defer'=>true];
         if (setting('business.product')) {
           $this->inputs['show_products']  = ['type' => 'select', 'options' => ['false', 'true'], 'defer'=>true];
           $this->inputs['mark_order']  = ['type' => 'select', 'options' => ['false', 'true'], 'defer'=>true];
         }
         if (setting('business.leg') >1) {
           $this->inputs['show_legs']  = ['type' => 'select', 'options' => ['false', 'true'], 'defer'=>true];
         }
         $this->inputs['send_sms']  = ['type' => 'select', 'options' => ['false', 'true'], 'defer'=>true];
         $this->inputs['send_mail']  = ['type' => 'select', 'options' => ['false', 'true'], 'defer'=>true];
         $this->inputs['status']  = ['type' => 'select', 'options' => ['pending', 'active', 'temporary'], 'defer'=>true];
         $this->inputs['show_video']  = ['type' => 'select', 'options' => ['false', 'true'], 'defer'=>true];
         $this->inputs['video_link']  = ['type' => 'link' , 'defer'=>true];

         if (is_array(setting('register.fields'))) {
            foreach (setting('register.fields') as $key => $value) {
                $this->extraInputs[$key] = [ 'type'=>'select', 'options'=>['true', 'false'], 'defer'=>true ];
            }
         }
       }
       elseif ($this->prefix === 'marketing') {
         $this->inputs['mail_host'] = ['type' => 'text'];
         $this->inputs['mail_port'] = ['type' => 'number'];
         $this->inputs['mail_encryption'] = ['type' => 'text'];
         $this->inputs['mail_username'] = ['type' => 'text'];
         $this->inputs['mail_password'] = ['type' => 'text'];
         $this->inputs['mail_from'] = ['type' => 'text'];
         $this->inputs['mail_from_address'] = ['type' => 'email'];
         $this->inputs['sms'] = ['type' => 'text'];
       }

       elseif ($this->prefix ==='payment') {
          $this->inputs['razorpay'] = ['type' => 'select', 'options'=>['select', 'true', 'false']];
          $this->inputs['razorpay_mode'] = ['type' => 'select', 'options'=>['select', 'test', 'live']];
          $this->inputs['razorpay_id'] = ['type' => 'text'];
          $this->inputs['razorpay_secret'] = ['type' => 'text'];

          $this->inputs['paypal'] = ['type' => 'select', 'options'=>['select', 'true', 'false']];
          $this->inputs['paypal_mode'] = ['type' => 'select', 'options'=>['select', 'sandbox', 'live']];
          $this->inputs['paypal_email'] = ['type'=>'email'];
       }

    }
    protected function mapValues($value='')
    {
       if ($this->prefix==='site') {
         if (is_array($site = setting('site'))) {
           foreach ($site as $key => $value) {
            $this->site[$key] = $value===true?'true': ( $value===false?'false' : $value );
           }
         }
       }
       elseif ($this->prefix==='business') {
         if (is_array($business = setting('business'))) {
           foreach ($business as $key => $value) {
             $this->business[$key] = $value===true?'true': ( $value===false?'false' : $value );
           }
         }
       }
       elseif ($this->prefix==='binary') {
         if (is_array($binary = setting('binary'))) {
           foreach ($binary as $key => $value) {
             $this->binary[$key] = $value===true?'true': ( $value===false?'false' : $value );
           }
         }
       }
       elseif ($this->prefix==='register') {
         if (is_array($register = setting('register'))) {
           foreach ($register as $key => $value) {
             if ($key==='fields') {
                foreach ($value as $key => $value) {
                   $this->register[$key] = $value===true?'true': ( $value===false?'false' : $value );
                }
             }else {
               $this->register[$key] = $value===true?'true': ( $value===false?'false' : $value );
             }
           }
         }
       }
       elseif ($this->prefix==='marketing') {
         if (is_array($marketing = setting('marketing'))) {
           foreach ($marketing as $key => $value) {
             $this->marketing[$key] = $value===true?'true': ( $value===false?'false' : $value );
           }
         }
       }
       elseif ($this->prefix==='payment') {
          if (is_array($payment = setting('payment'))) {
             foreach ($payment as $key => $value) {
                $this->payment[$key] = $value===true?'true': ( $value===false?'false' : $value );
             }
          }
       }

    }
    public function render()
    {
        return view('settings');
    }

    public function showExtraFields()
    {
       $this->showFields = !$this->showFields;
    }

    public function save()
    {
      $this->emit('hideLoading');
       $updatable = [];
       if ($this->prefix==='site') {
         if ($this->logo) {
           $this->validate([ 'logo' => 'image|max:2024']);
           $this->site['logo'] = '/storage/'.$this->logo->store('uploads/siteimg/logos', 'public');
         }
          $updatable = $this->site;
       }
       elseif ($this->prefix==='business') {
          $updatable  = $this->business;
       }
       elseif ($this->prefix==='binary') {
          $updatable  = $this->binary;
       }
       elseif ($this->prefix==='register') {
          foreach (setting('register.fields') as $key => $value) {
            if ($this->register[$key] ==='true') {
              $this->register['fields'][$key] = true;
            }elseif ($this->register[$key]==='false') {
              $this->register['fields'][$key] = false;
            }else {
              $this->register['fields'][$key] = $this->register[$key];
            }
            unset($this->register[$key]);
          }
          $updatable  = $this->register;
       }
       elseif ($this->prefix==='marketing') {
          $updatable  = $this->marketing;
       }
       elseif ($this->prefix==='payment') {
          $updatable  = $this->payment;
       }
       foreach ($updatable as $key => $value) {
         setting([ $this->prefix.'.'.$key => $value==='true'?true:( $value==='false'?false:$value) ]);
       }
       setting()->save();
       session()->flash('success', ucfirst(trans('messages.settings-updated')));
       $this->redirectRoute('settings', ['prefix'=>$this->prefix]);
    }

}
