<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rates', function (Blueprint $table) {
            $table->id();
            $table->string('USDAED')->nullable();
            $table->string('USDAFN')->nullable();
            $table->string('USDALL')->nullable();
            $table->string('USDAMD')->nullable();
            $table->string('USDANG')->nullable();
            $table->string('USDAOA')->nullable();
            $table->string('USDARS')->nullable();
            $table->string('USDAUD')->nullable();
            $table->string('USDAWG')->nullable();
            $table->string('USDAZN')->nullable();
            $table->string('USDBAM')->nullable();
            $table->string('USDBBD')->nullable();
            $table->string('USDBDT')->nullable();
            $table->string('USDBGN')->nullable();
            $table->string('USDBHD')->nullable();
            $table->string('USDBIF')->nullable();
            $table->string('USDBMD')->nullable();
            $table->string('USDBND')->nullable();
            $table->string('USDBOB')->nullable();
            $table->string('USDBRL')->nullable();
            $table->string('USDBSD')->nullable();
            $table->string('USDBTC')->nullable(); 
            $table->string('USDBTN')->nullable();
            $table->string('USDBWP')->nullable();
            $table->string('USDBYN')->nullable();
            $table->string('USDBYR')->nullable();
            $table->string('USDBZD')->nullable();
            $table->string('USDCAD')->nullable();
            $table->string('USDCDF')->nullable();
            $table->string('USDCHF')->nullable();
            $table->string('USDCLF')->nullable();
            $table->string('USDCLP')->nullable();
            $table->string('USDCNY')->nullable();
            $table->string('USDCOP')->nullable();
            $table->string('USDCRC')->nullable();
            $table->string('USDCUC')->nullable();
            $table->string('USDCUP')->nullable();
            $table->string('USDCVE')->nullable();
            $table->string('USDCZK')->nullable();
            $table->string('USDDJF')->nullable();
            $table->string('USDDKK')->nullable();
            $table->string('USDDOP')->nullable();
            $table->string('USDDZD')->nullable();
            $table->string('USDEGP')->nullable();
            $table->string('USDERN')->nullable();
            $table->string('USDETB')->nullable();
            $table->string('USDEUR')->nullable();
            $table->string('USDFJD')->nullable();
            $table->string('USDFKP')->nullable();
            $table->string('USDGBP')->nullable();
            $table->string('USDGEL')->nullable();
            $table->string('USDGGP')->nullable();
            $table->string('USDGHS')->nullable();
            $table->string('USDGIP')->nullable();
            $table->string('USDGMD')->nullable();
            $table->string('USDGNF')->nullable();
            $table->string('USDGTQ')->nullable();
            $table->string('USDGYD')->nullable();
            $table->string('USDHKD')->nullable();
            $table->string('USDHNL')->nullable();
            $table->string('USDHRK')->nullable();
            $table->string('USDHTG')->nullable();
            $table->string('USDHUF')->nullable();
            $table->string('USDIDR')->nullable();
            $table->string('USDILS')->nullable();
            $table->string('USDIMP')->nullable();
            $table->string('USDINR')->nullable();
            $table->string('USDIQD')->nullable();
            $table->string('USDIRR')->nullable();
            $table->string('USDISK')->nullable();
            $table->string('USDJEP')->nullable();
            $table->string('USDJMD')->nullable();
            $table->string('USDJOD')->nullable();
            $table->string('USDJPY')->nullable();
            $table->string('USDKES')->nullable();
            $table->string('USDKGS')->nullable();
            $table->string('USDKHR')->nullable();
            $table->string('USDKMF')->nullable();
            $table->string('USDKPW')->nullable();
            $table->string('USDKRW')->nullable();
            $table->string('USDKWD')->nullable();
            $table->string('USDKYD')->nullable();
            $table->string('USDKZT')->nullable();
            $table->string('USDLAK')->nullable();
            $table->string('USDLBP')->nullable();
            $table->string('USDLKR')->nullable();
            $table->string('USDLRD')->nullable();
            $table->string('USDLSL')->nullable();
            $table->string('USDLTL')->nullable();
            $table->string('USDLVL')->nullable();
            $table->string('USDLYD')->nullable();
            $table->string('USDMAD')->nullable();
            $table->string('USDMDL')->nullable();
            $table->string('USDMGA')->nullable();
            $table->string('USDMKD')->nullable();
            $table->string('USDMMK')->nullable();
            $table->string('USDMNT')->nullable();
            $table->string('USDMOP')->nullable();
            $table->string('USDMRO')->nullable();
            $table->string('USDMUR')->nullable();
            $table->string('USDMVR')->nullable();
            $table->string('USDMWK')->nullable();
            $table->string('USDMXN')->nullable();
            $table->string('USDMYR')->nullable();
            $table->string('USDMZN')->nullable();
            $table->string('USDNAD')->nullable();
            $table->string('USDNGN')->nullable();
            $table->string('USDNIO')->nullable();
            $table->string('USDNOK')->nullable();
            $table->string('USDNPR')->nullable();
            $table->string('USDNZD')->nullable();
            $table->string('USDOMR')->nullable();
            $table->string('USDPAB')->nullable();
            $table->string('USDPEN')->nullable();
            $table->string('USDPGK')->nullable();
            $table->string('USDPHP')->nullable();
            $table->string('USDPKR')->nullable();
            $table->string('USDPLN')->nullable();
            $table->string('USDPYG')->nullable();
            $table->string('USDQAR')->nullable();
            $table->string('USDRON')->nullable();
            $table->string('USDRSD')->nullable();
            $table->string('USDRUB')->nullable();
            $table->string('USDRWF')->nullable();
            $table->string('USDSAR')->nullable();
            $table->string('USDSBD')->nullable();
            $table->string('USDSCR')->nullable();
            $table->string('USDSDG')->nullable();
            $table->string('USDSEK')->nullable();
            $table->string('USDSGD')->nullable();
            $table->string('USDSHP')->nullable();
            $table->string('USDSLL')->nullable();
            $table->string('USDSOS')->nullable();
            $table->string('USDSRD')->nullable();
            $table->string('USDSTD')->nullable();
            $table->string('USDSVC')->nullable();
            $table->string('USDSYP')->nullable();
            $table->string('USDSZL')->nullable();
            $table->string('USDTHB')->nullable();
            $table->string('USDTJS')->nullable();
            $table->string('USDTMT')->nullable();
            $table->string('USDTND')->nullable();
            $table->string('USDTOP')->nullable();
            $table->string('USDTRY')->nullable();
            $table->string('USDTTD')->nullable();
            $table->string('USDTWD')->nullable();
            $table->string('USDTZS')->nullable();
            $table->string('USDUAH')->nullable();
            $table->string('USDUGX')->nullable();
            $table->string('USDUSD')->nullable();
            $table->string('USDUYU')->nullable();
            $table->string('USDUZS')->nullable();
            $table->string('USDVEF')->nullable();
            $table->string('USDVND')->nullable();
            $table->string('USDVUV')->nullable();
            $table->string('USDWST')->nullable();
            $table->string('USDXAF')->nullable();
            $table->string('USDXAG')->nullable();
            $table->string('USDXAU')->nullable();
            $table->string('USDXCD')->nullable();
            $table->string('USDXDR')->nullable();
            $table->string('USDXOF')->nullable();
            $table->string('USDXPF')->nullable();
            $table->string('USDYER')->nullable();
            $table->string('USDZAR')->nullable();
            $table->string('USDZMK')->nullable();
            $table->string('USDZMW')->nullable();
            $table->string('USDZWL')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rates');
    }
}