@extends('layouts.app')
@section('content')
<h1 style="text-align:center">Espace photos<div class="dropdown show">
  <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    photo

  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a class="dropdown-item" href="#">Event</a>
    <a class="dropdown-item" href="#">Nuit du hack</a>
    <a class="dropdown-item" href="#">Hackathon</a>
  </div>
</div></h1>
<div class="dropdown show"style="text-align:center">
  <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    video

  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a class="dropdown-item" href="#">Event</a>
    <a class="dropdown-item" href="#">Nuit du hack</a>
    <a class="dropdown-item" href="#">Hackathon</a>
  </div>
</div>
<hr></hr>

<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
<div class="container">
	<div class="row">
		<div class="row">
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Test sur des serveurs"
                   data-image="https://cdn.discordapp.com/attachments/515565524214743052/563624988087812096/analogue-blur-business-159282-1.jpg"
                   data-target="#image-gallery">
                    <img class="img-thumbnail"
                         src="https://cdn.discordapp.com/attachments/515565524214743052/563624988087812096/analogue-blur-business-159282-1.jpg"
                         alt="Another alt text">
                </a>

            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Test sur des serveurs"
                   data-image="https://images.pexels.com/photos/270360/pexels-photo-270360.jpeg?cs=srgb&dl=business-code-coding-270360.jpg&fm=jpg?dl&fit=crop&crop=entropy&w=1280&h=960"
                   data-target="#image-gallery">
                    <img class="img-thumbnail"
                         src="https://images.pexels.com/photos/270360/pexels-photo-270360.jpeg?cs=srgb&dl=business-code-coding-270360.jpg&fm=jpg?dl&fit=crop&crop=entropy&w=1280&h=960"
                         alt="Another alt text">
                </a>


            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Test sur des serveurs"
                   data-image="https://www.pandasecurity.com/france/mediacenter/src/uploads/2018/11/pandasecurity-a-quoi-serve-un-pare-feu.jpg"
                   data-target="#image-gallery">
                    <img class="img-thumbnail"
                         src="https://www.pandasecurity.com/france/mediacenter/src/uploads/2018/11/pandasecurity-a-quoi-serve-un-pare-feu.jpg"
                         alt="Another alt text">
                </a>


            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Test sur des serveurs"
                   data-image="https://zasio-informatique.fr/wp-content/uploads/2015/04/datacenter-286386_1280.jpg"
                   data-target="#image-gallery">
                    <img class="img-thumbnail"
                         src="https://zasio-informatique.fr/wp-content/uploads/2015/04/datacenter-286386_1280.jpg"
                         alt="Another alt text">
                </a>


            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Test sur des serveurs"
                   data-image="https://spyingchallenge.com/wp-content/uploads/photo-gallery/edition_2018/photo_2018-07-06_18-15-34.jpg?bwg=1536340690"
                   data-target="#image-gallery">
                    <img class="img-thumbnail"
                         src="https://spyingchallenge.com/wp-content/uploads/photo-gallery/edition_2018/photo_2018-07-06_18-15-34.jpg?bwg=1536340690"
                         alt="Another alt text">
                </a>


            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Test sur des serveurs"
                   data-image="https://images.pexels.com/photos/1451448/pexels-photo-1451448.jpeg?cs=srgb&dl=analysis-banking-businesswoman-1451448.jpg&fm=jpg?dl&fit=crop&crop=entropy&w=1280&h=960"
                   data-target="#image-gallery">
                    <img class="img-thumbnail"
                         src="https://images.pexels.com/photos/1451448/pexels-photo-1451448.jpeg?cs=srgb&dl=analysis-banking-businesswoman-1451448.jpg&fm=jpg?dl&fit=crop&crop=entropy&w=1280&h=960"
                         alt="Another alt text">
                </a>

            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Test sur des serveurs"
                   data-image="https://images.pexels.com/photos/926984/pexels-photo-926984.jpeg?cs=srgb&dl=action-adults-business-926984.jpg&fm=jpg?dl&fit=crop&crop=entropy&w=1280&h=960"
                   data-target="#image-gallery">
                    <img class="img-thumbnail"
                         src="https://images.pexels.com/photos/926984/pexels-photo-926984.jpeg?cs=srgb&dl=action-adults-business-926984.jpg&fm=jpg?dl&fit=crop&crop=entropy&w=1280&h=960"
                         alt="Another alt text">
                </a>

            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Test sur des serveurs"
                   data-image="https://images.pexels.com/photos/34140/pexels-photo.jpg?cs=srgb&dl=blogging-coding-copywriting-34140.jpg&fm=jpg?dl&fit=crop&crop=entropy&w=1280&h=960"
                   data-target="#image-gallery">
                    <img class="img-thumbnail"
                         src="https://images.pexels.com/photos/34140/pexels-photo.jpg?cs=srgb&dl=blogging-coding-copywriting-34140.jpg&fm=jpg?dl&fit=crop&crop=entropy&w=1280&h=960"
                         alt="Another alt text">
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Test sur des serveurs"
                   data-image="https://cdn.discordapp.com/attachments/515565524214743052/563624988087812096/analogue-blur-business-159282-1.jpg"
                   data-target="#image-gallery">
                    <img class="img-thumbnail"
                         src="https://cdn.discordapp.com/attachments/515565524214743052/563624988087812096/analogue-blur-business-159282-1.jpg"
                         alt="Another alt text">
                </a>

            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Test sur des serveurs"
                   data-image="https://cdn.discordapp.com/attachments/515565524214743052/563624988087812096/analogue-blur-business-159282-1.jpg"
                   data-target="#image-gallery">
                    <img class="img-thumbnail"
                         src="https://cdn.discordapp.com/attachments/515565524214743052/563624988087812096/analogue-blur-business-159282-1.jpg"
                         alt="Another alt text">
                </a>



            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Test sur des serveurs"
                   data-image="https://cdn.discordapp.com/attachments/515565524214743052/563624988087812096/analogue-blur-business-159282-1.jpg"
                   data-target="#image-gallery">
                    <img class="img-thumbnail"
                         src="https://cdn.discordapp.com/attachments/515565524214743052/563624988087812096/analogue-blur-business-159282-1.jpg"
                         alt="Another alt text">
                </a>

            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Test sur des serveurs"
                   data-image="https://cdn.discordapp.com/attachments/515565524214743052/563624988087812096/analogue-blur-business-159282-1.jpg"
                   data-target="#image-gallery">
                    <img class="img-thumbnail"
                         src="https://cdn.discordapp.com/attachments/515565524214743052/563624988087812096/analogue-blur-business-159282-1.jpg"
                         alt="Another alt text">
                </a>

            </div>
        <div class="modal fade" id="image-gallery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="image-gallery-title"></h4>
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <img id="image-gallery-image" class="img-responsive col-md-12" src="">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary float-left" id="show-previous-image"><i class="fa fa-arrow-left"></i>
                        </button>

                        <button type="button" id="show-next-image" class="btn btn-secondary float-right"><i class="fa fa-arrow-right"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
	</div>
</div>
</div>
<style media="screen">
.btn:focus, .btn:active, button:focus, button:active {
outline: none !important;
box-shadow: none !important;
}

#image-gallery .modal-footer{
display: block;
}

.thumb{
margin-top: 15px;
margin-bottom: 15px;
}
</style>
<script type="text/javascript">
let modalId = $('#image-gallery');

$(document)
.ready(function () {

  loadGallery(true, 'a.thumbnail');

  //This function disables buttons when needed
  function disableButtons(counter_max, counter_current) {
    $('#show-previous-image, #show-next-image')
      .show();
    if (counter_max === counter_current) {
      $('#show-next-image')
        .hide();
    } else if (counter_current === 1) {
      $('#show-previous-image')
        .hide();
    }
  }

  /**
   *
   * @param setIDs        Sets IDs when DOM is loaded. If using a PHP counter, set to false.
   * @param setClickAttr  Sets the attribute for the click handler.
   */

  function loadGallery(setIDs, setClickAttr) {
    let current_image,
      selector,
      counter = 0;

    $('#show-next-image, #show-previous-image')
      .click(function () {
        if ($(this)
          .attr('id') === 'show-previous-image') {
          current_image--;
        } else {
          current_image++;
        }

        selector = $('[data-image-id="' + current_image + '"]');
        updateGallery(selector);
      });

    function updateGallery(selector) {
      let $sel = selector;
      current_image = $sel.data('image-id');
      $('#image-gallery-title')
        .text($sel.data('title'));
      $('#image-gallery-image')
        .attr('src', $sel.data('image'));
      disableButtons(counter, $sel.data('image-id'));
    }

    if (setIDs == true) {
      $('[data-image-id]')
        .each(function () {
          counter++;
          $(this)
            .attr('data-image-id', counter);
        });
    }
    $(setClickAttr)
      .on('click', function () {
        updateGallery($(this));
      });
  }
});

// build key actions
$(document)
.keydown(function (e) {
  switch (e.which) {
    case 37: // left
      if ((modalId.data('bs.modal') || {})._isShown && $('#show-previous-image').is(":visible")) {
        $('#show-previous-image')
          .click();
      }
      break;

    case 39: // right
      if ((modalId.data('bs.modal') || {})._isShown && $('#show-next-image').is(":visible")) {
        $('#show-next-image')
          .click();
      }
      break;

    default:
      return; // exit this handler for other keys
  }
  e.preventDefault(); // prevent the default action (scroll / move caret)
});

</script>
@endsection
