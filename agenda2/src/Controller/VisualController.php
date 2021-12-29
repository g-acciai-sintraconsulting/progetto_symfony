<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VisualController extends AbstractController
{
    /**
     * @Route("/visual", name="visual")
     */
    public function index(): Response
    {
        return new Response(<<<EOF
        </html>
        <!DOCTYPE html>
          <html xmlns="http://www.w3.org/1999/xhtml">
               <head>
                    <title>Essential JS 2</title>
                    <!-- Essential JS 2 Calendar's dependent material theme -->
                    <link href="https://cdn.syncfusion.com/ej2/ej2-base/styles/material.css" rel="stylesheet" type="text/css" />
                    <link href="https://cdn.syncfusion.com/ej2/ej2-buttons/styles/material.css" rel="stylesheet" type="text/css" />
                    <link href="https://cdn.syncfusion.com/ej2/ej2-calendars/styles/material.css" rel="stylesheet" type="text/css" />
         
                    <!-- Essential JS 2 all script -->
                    <!-- <script src="https://cdn.syncfusion.com/ej2/dist/ej2.min.js" type="text/javascript"></script> -->
         
                    <!-- Essential JS 2 Calendar's dependent scripts -->
                    <script src="https://cdn.syncfusion.com/ej2/ej2-base/dist/global/ej2-base.min.js" type="text/javascript"></script>
                    <script src="https://cdn.syncfusion.com/ej2/ej2-inputs/dist/global/ej2-inputs.min.js" type="text/javascript"></script>
                    <script src="https://cdn.syncfusion.com/ej2/ej2-buttons/dist/global/ej2-buttons.min.js" type="text/javascript"></script>
                    <script src="https://cdn.syncfusion.com/ej2/ej2-lists/dist/global/ej2-lists.min.js" type="text/javascript"></script>
                    <script src="https://cdn.syncfusion.com/ej2/ej2-popups/dist/global/ej2-popups.min.js" type="text/javascript"></script>
                    <script src="https://cdn.syncfusion.com/ej2/ej2-calendars/dist/global/ej2-calendars.min.js" type="text/javascript"></script>
                    </head>
          <body>
            <!-- Add the HTML <div> element  -->
             <div id="element"/>
            <script>
                // initialize the Calendar component
                var calendar = new ej.calendars.Calendar({
                    change:valueChange
                });
         
                // Render the initialized button.
                calendar.appendTo('#element');
                
                Date.prototype.addHours = function(h) {
                    this.setTime(this.getTime() + (h*60*60*1000));
                    return this;
                  }

                function valueChange(args){
                    var url='/event?date=' + args.value.addHours(12).toISOString();
                    window.location.href=url;  
                } 
                 
            </script>
          </body>


          <div class="col-lg-12 control-section">
          <div class="control_wrapper">
              <div id="container" style="overflow:auto">
                  <div id="calendar" class="e-customStyle"></div>
                  <br />
                  <span id="date_label"> Selected Value: </span>
              </div>
          </div>
          </div>
        <style>
      
          .e-customStyle span.e-icons.highlight {
              margin-top: -13px;
              display: block;
              margin-left: 4px;
          }
      
          .e-customStyle span.e-icons.highlight,
          .e-customStyle span.e-icons.highlight:before {
              color: rgb(0, 0, 255);
          }
      
          .highcontrast .e-customStyle span.e-icons.highlight,
          .highcontrast .e-customStyle span.e-icons.highlight:before,
          .material-dark .e-customStyle span.e-icons.highlight,
          .material-dark .e-customStyle span.e-icons.highlight:before,
          .fabric-dark .e-customStyle span.e-icons.highlight,
          .fabric-dark .e-customStyle span.e-icons.highlight:before,
          .bootstrap-dark .e-customStyle span.e-icons.highlight,
          .bootstrap-dark .e-customStyle span.e-icons.highlight:before,
          .bootstrap5-dark .e-customStyle span.e-icons.highlight,
          .bootstrap5-dark .e-customStyle span.e-icons.highlight:before,
          .tailwind-dark .e-customStyle span.e-icons.highlight,
          .tailwind-dark .e-customStyle span.e-icons.highlight:before {
              color: #ff7500;
          }
      
          .e-customStyle .e-other-month span.e-icons.highlight:before {
              content: "";
          }
      
          body.highcontrast.e-bigger .e-customStyle.e-calendar span.e-icons.highlight:before,
          body.highcontrast .e-customStyle.e-bigger.e-calendar span.e-icons.highlight:before,
          body.bootstrap.e-bigger .e-customStyle.e-calendar span.e-icons.highlight:before,
          body.bootstrap .e-customStyle.e-bigger.e-calendar span.e-icons.highlight:before {
              top: 1px;
          }
      
          .e-bigger .e-customStyle.e-calendar span.e-icons.highlight:before,
          .e-customStyle.e-bigger.e-calendar span.e-icons.highlight:before {
              top: -1px;
          }
      
          .e-customStyle span.e-icons.highlight:before {
              content: "\e190";
              vertical-align: middle;
              margin-right: 3px;
              font-size: 4px;
              position: relative;
              top: 1px;
              font-weight: normal;
          }
      
          .e-customStyle .e-selected span.e-icons.highlight:before {
              color: #fff;
          }
      
          .e-customStyle span.e-icons.highlight,
          .e-customStyle.e-calendar .e-content span.special,
          .e-customStyle.e-calendar .e-content span.daycell {
              font-weight: bold;
          }
      
          body.highcontrast #date_label {
              color: white;
          }
      
          body.tailwind #date_label {
              width: 265px;
          }
      
      
          /* end of custom generated icons styles */
        </style>
        <div class="col-lg-12 control-section">
    <div class="control_wrapper">
        <div id="container" style="overflow:auto">
            <div id="calendar"></div><br />
            </div>
        </div>
    </div>


        </html>
    EOF
        );
    }
}
