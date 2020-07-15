<link rel="stylesheet" href="css/contact.css">
<div class="container">
    <div class="jumbotron jumbotron-sm">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-lg-12 header"></div>
    </div>
  </div>
</div>
<div class="container card">
  <div class="row" style="z-index: 2;">
    <div class="col-sm-12 col-lg-12">
      <h1 class="h1">Contact Us <span class="fa fa-envelope"></span> <!--<small class="col-xs-12" style="padding-left: 0">We will get back to You</small>--></h1>
    </div>
  </div>
  <div class="row" style="z-index: 2;">
    <div class="col-sm-12 col-md-12">
      <div class="cardStyle">
        <form name="contact" id="form" data-toggle="validator">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="name">
                  Name</label>
                <input type="text" class="form-control" id="name" placeholder="Enter name" required="required" />
              </div>
              <div class="form-group">
                <label for="email">
                  Email Address</label>
                <div class="input-group">
                  <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                  </span>
                  <input type="email" class="form-control" id="email" placeholder="Enter email" required="required" />
                </div>
              </div>
              <div class="form-group">
                <label for="subject">
                  Subject</label>
                <select id="subject" name="subject" class="form-control" required="required">
                  <option value="none" selected="" disabled>Choose One:</option>
                  <option value="general">General Customer Service</option>
                  <option value="collaborate">Collaborate with Us</option>
                  <option value="bug">Found a Bug/Issue</option>
                  <option value="other">Any other Queries</option>
                </select>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="name">
                  Message</label>
                <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required" placeholder="Message"></textarea>
              </div>
            </div>
            <div class="col-md-12">
              <button type="submit" class="btn btn-success pull-right" id="btnContactUs">
                Send Message</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
</div>
