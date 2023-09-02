
<html lang="en">
    <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
    <body>
        <h1>Hello, world!</h1>
    
        
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
          Launch demo modal
        </button>
    
        
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
              </div>
              <div class="modal-body" id="hco-embedded">
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
          </div>
        </div>
    
        
        <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
    
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
    
        
        <script src="https://test-nmbbank.mtf.gateway.mastercard.com/static/checkout/checkout.min.js" ></script>
    
    
        <script>
            // Configure Checkout first
            Checkout.configure({
                session: {
                    id: "<your_initiate_checkout_ID>"
                }
            })
            // after the modal is shown, then call Checkout.showEmbeddedPage('#hco-embedded')
                       $('#exampleModal').on('shown.bs.modal', function (e) {

                         Checkout.showEmbeddedPage('#hco-embedded',

                             () => { $('#exampleModal').modal() } // tell Checkout how to launch the modal

                         )

                       });

 

                     $('#exampleModal').on('hide.bs.modal', function (e) {

                      sessionStorage.clear(); // tell Checkout to clear sessionStorage when I close the modal

                      });
        </script>
    
        
      </body>
      </html>