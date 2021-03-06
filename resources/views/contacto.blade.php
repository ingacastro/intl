@extends('layouts.app')
@section('section__banner_right')
    <div class="mail">
        <h3>Contacto</h3>
        <div class="agileinfo_mail_grids">
            <div class="col-md-4 agileinfo_mail_grid_left">
                <ul>
                    <li><i class="fa fa-home" aria-hidden="true"></i></li>
                    <li>Direcciòn<span>México INTL. Parts de México S.A. de C.V. AV. Cristóbal Colón #4985. Int. Boreal #605
                        Col. Villas Colón Tlaquepaque 45601 Jalisco, México</li>
                </ul>
                <ul>
                    <li><i class="fa fa-envelope" aria-hidden="true"></i></li>
                    <li>email<span><a href="mailto:ventas@internationalparts.us">ventas@internationalparts.us</a></span></li>
                </ul>
                <ul>
                    <li><i class="fa fa-phone" aria-hidden="true"></i></li>
                    <li>LLamar a <span>Tel. <a href="tel:+523323068550">+52 (33) 2306 85 50</a> Terminación 50, 51, 52, 53 Tel. <a href="tel:+523332712547">+52 (33) 3271 2547</a> </span></li>
                </ul>
            </div>
            <div class="col-md-8 agileinfo_mail_grid_right">
                <form action="#" method="post">
                    <div class="col-md-6 wthree_contact_left_grid">
                        <input type="text" name="Name" value="Nombre*" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name*';}" required="">
                        <input type="email" name="Email" value="Email*" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email*';}" required="">
                    </div>
                    <div class="col-md-6 wthree_contact_left_grid">
                        <input type="text" name="Telephone" value="Teléfono*" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Telephone*';}" required="">
                        <input type="text" name="Subject" value="Asunto*" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Subject*';}" required="">
                    </div>
                    <div class="clearfix"> </div>
                    <textarea name="Message" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Mensaje...';}" required="">Message...</textarea>
                    <div class="col-md-6 wthree_contact_left_grid" style="margin-bottom: 20px;">
                        <input type="file" name="file">
                    </div>
                    <div class="clearfix"> </div>
                    <input type="submit" value="Submit">
                    <input type="reset" value="Clear">
                </form>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
@endsection
