<?php 
namespace App\Mail;
use App\Helper\Cart;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
/**
 * 
 */
class SendMail extends Mailable
{	
	use Queueable, SerializesModels;
	
	public function build(){
		return $this->view('emails.shipped')->with([
			'cart'=> new Cart,
		]);
	}
}
 ?>