<?php 
 session_start();
 include "C:/xampp/htdocs/final/core/commandeC.php";

?>


    <div class="bg-light py-3">
      <div class="container">
        <div class="row ">
          <div class="col-md-12 mb-0"><a href="index.html">Home</a> <span class="mx-2 mb-0">/</span> <a href="cart.html">Cart</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Checkout</strong></div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-12">
           
          </div>
        </div>
        <div class="row">
          
            <form class="col-md-12" method="post" action="ajoutCmd.php">
            <div class="row mb-5">
              <div class="col-md-12">
                <h2 class="h3 mb-3 text-black">Your Order</h2>
                <div class="p-3 p-lg-5 border">
                  <table class="table site-block-order-table mb-5">
                    <thead>

                      <th>Product</th>
                      <th>Quantity</th>
                      <th>Total</th>
                    </thead>
                    <tbody>

                       <?php 
                         $panier=new PanierC();

                        $listeproduits  =$panier->afficherProduits();
                        $total=$panier->Total();
                        $_SESSION['total']=$total;
               
                        foreach ($listeproduits as $p ) { 


                ?>  

                      <tr>
                        <td><?php echo $p['nom_pro']; ?><strong class="mx-2"></strong></td>
                        <td><?php echo $p['QTE'];?></td>
                               <td><?php echo $p['prix']*$p['QTE']; ?> DT</td>

                      </tr>
                    <?php
                  }
                  ?>
                     
                      <tr>
                        <td class="text-black font-weight-bold"><strong>Order Total</strong></td>
                        <td class="text-black font-weight-bold"><strong><?php echo $total;?></strong> DT</td>
                      </tr>
                    </tbody>
                  </table>

                  <div class="mb-4">
                <h3 class="mb-3 h6 text-uppercase text-black d-block">Livraison</h3>
                <label for="s_sm" class="d-flex">
                  <input type="radio" name="livraison" value="Boutique" id="s_sm" class="mr-2 mt-1" checked > <span class="text-black">Boutique</span>
                </label>
                <label for="s_md" class="d-flex">
                  <input type="radio" name="livraison" value="Livraison à domicile" id="s_md" class="mr-2 mt-1"> <span class="text-black">Livraison à domicile</span>
                </label>
                
                 </div>

                   <div class="mb-4">
                <h3 class="mb-3 h6 text-uppercase text-black d-block">Payment</h3>
                <label for="s_sm" class="d-flex">
                  <input type="radio" name="Payment" value="Chèque" id="s_sm" class="mr-2 mt-1" checked > <span class="text-black">Bons</span>
                </label>
                <label for="s_md" class="d-flex">
                  <input type="radio" name="Payment" value="Espèce" id="s_md" class="mr-2 mt-1"> <span class="text-black">Espèce</span>
                </label>
                
                 </div>


                  

                  <div class="form-group">
                    <button type ="submit" class="btn btn-primary btn-lg py-3 btn-block">Place Order</button>
                  </div>

                </div>
              </div>
            </div>

          </div>
        </div>
        </form>
      </div>
    </div>
