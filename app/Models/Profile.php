<?php

namespace App\Models;

use Spatie\Activitylog\Traits\LogsActivity;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

/**
 * App\Models\Profile
 *
 * @property int $id
 * @property int $user_id
 * @property string|null $city
 * @property int|null $pin
 * @property string|null $district
 * @property string|null $state
 * @property string|null $counrty
 * @property string|null $address
 * @property int|null $phonepe
 * @property int|null $gpay
 * @property int|null $paytm
 * @property string|null $paypal
 * @property string|null $cashapp
 * @property string|null $applepay
 * @property string|null $venmo
 * @property string|null $btc_address
 * @property int|null $bank_ac_no
 * @property string|null $bank_ac_holder
 * @property string|null $bank_ac_ifsc
 * @property string|null $bank_ac_branch
 * @property string|null $pan_no
 * @property string|null $pan_name
 * @property string|null $aadhar_no
 * @property string|null $dob
 * @property string|null $gstin
 * @property string|null $tax_no
 * @property string|null $id_proof_pic
 * @property string|null $address_proof_pic
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Activitylog\Models\Activity[] $activities
 * @property-read int|null $activities_count
 * @property-read User $user
 * @method static \Illuminate\Database\Eloquent\Builder|Profile newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Profile newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Profile query()
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereAadharNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereAddressProofPic($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereApplepay($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereBankAcBranch($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereBankAcHolder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereBankAcIfsc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereBankAcNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereBtcAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereCashapp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereCounrty($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereDistrict($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereDob($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereGpay($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereGstin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereIdProofPic($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile wherePanName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile wherePanNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile wherePaypal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile wherePaytm($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile wherePhonepe($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile wherePin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereState($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereTaxNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereVenmo($value)
 * @mixin \Eloquent
 */
class Profile extends Model
{
   use LogsActivity;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'city',
        'pin',
        'district',
        'state',
        'counrty',
        'address',
        'phonepe',
        'gpay',
        'paytm',
        'paypal',
        'cashapp',
        'applepay',
        'venmo',
        'btc_address',
        'bank_ac_no',
        'bank_ac_holder',
        'bank_ac_ifsc',
        'bank_ac_branch',
        'pan_no',
        'pan_name',
        'aadhar_no',
        'dob',
        'gstin',
        'tax_no',
        'id_proof_pic',
        'address_proof_pic',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
