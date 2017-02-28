<?php if(!empty($_POST)){


class Email {
    var $to;
    var $to_name;
    var $from;
    var $from_name;
    var $subject;
    var $htmlbody;
    var $sendBuyer;

    public function to($to , $name = null) {
        $this -> to = implode(',',$to);
        $this -> to_name = $name;
        return $this;
    }
    public function from($from, $name = null) {
        $this -> from = $from;
        $this -> from_name = $name;
        return $this;
    }

    public function subject($subject) {
        $this -> subject = $subject;
        return $this;
    }

    public function message($msg) {
        $this -> htmlbody = $msg;
        return $this;
    }
    public function sendBuyer()
    {

        $this->data['html']="Hello,
Congratulation!!
You have been send your important feed back.";

        $headers = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

        $headers .= 'To:' . $this -> to_name . '<' . $this -> to . '>' . "\r\n";
        $headers .= 'From:' . $this -> from_name . '<' . $this -> from . '>' . "\r\n";

        if (mail($this -> from, $this->from_name, $this->data['html'], $headers)) {
            return true;
        } else {
            return false;
        }
    }

    public function send() {
        $headers = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

        $headers .= 'To:' . $this -> to_name . '<' . $this -> to . '>' . "\r\n";
        $headers .= 'From:' . $this -> from_name . '<' . $this -> from . '>' . "\r\n";

        if (mail($this -> to, $this -> subject, $this -> htmlbody, $headers)) {
            $msgSend = "Your messege has been send successfully";
//    return $msgSend;
        } else {
            return false;
        }
    }

}

    $detail='Name:'.$_POST['name'].'<br/>'.'Email:'.$_POST['email'].'<br/>'.'Note:'.$_POST['details'];

    $email=new Email();
    $email->to(array('shanto.646596@gmail.com'),'receiver_name')
        ->from($_POST['email'],$_POST['name'])
        ->subject($_POST['subject'])
        ->message($detail)
        ->send();
}?>
<div id="mainBody">
    <div class="container">
        <hr class="soften">
        <h1>Visit us</h1>
        <hr class="soften"/>
        <div class="row">
            <div class="span4">
                <h4>Contact Details</h4>
                <p>	Index Plaza,<br/> Narsingdi Sadar Upazila, Narsingdi.
                    <br/><br/>
                    shahidul@gmail.com<br/>
                    web:www.ecom.com
                </p>
            </div>

            <div class="span4">
                <h4>Opening Hours</h4>
                <h5> thursday - Tuesday</h5>
                <p>09:00am - 09:00pm<br/><br/></p>
            </div>
            <div class="span4">
                <h4>Email Us</h4>
                <form action="#" method="post" class="form-horizontal">
                    <fieldset>
                        <div class="control-group">

                            <input type="text" name="name" placeholder="name" class="input-xlarge"/>

                        </div>
                        <div class="control-group">

                            <input type="text" name="email" placeholder="email" class="input-xlarge"/>

                        </div>
                        <div class="control-group">

                            <input type="text" name="subject" placeholder="subject" class="input-xlarge"/>

                        </div>
                        <div class="control-group">
                            <textarea rows="3" name="details" id="textarea" class="input-xlarge"></textarea>

                        </div>

                        <button class="btn btn-large" type="submit">Send Messages</button>

                    </fieldset>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="span12">
                <iframe style="width:100%; height:300; border: 0px" scrolling="no" src="https://maps.google.co.uk/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=index+plaza,+Narsingdi,+Dhaka,+Bangladesh&amp;aq=0&amp;oq=index+plaza,+narsingdi,+dhaka,+bangladesh&amp;sll=39.9589,-120.955336&amp;sspn=0.007114,0.016512&amp;ie=UTF8&amp;hq=&amp;hnear=index+plaza,+Narsingdi,+Dhaka,+Bangladesh&amp;t=m&amp;ll=36.732762,-119.695787&amp;spn=0.017197,0.100336&amp;z=2&amp;output=embed"></iframe><br />
            </div>
        </div>
    </div>
</div>