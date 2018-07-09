<?php


 function autoload_eb95fabc8ffe0ebdbe1b11ce27386fc7($class)
{
    $classes = array(
        'UnifaunWsdl\ConsignmentWS' => __DIR__ .'/ConsignmentWS.php',
        'UnifaunWsdl\ConsignmentList' => __DIR__ .'/ConsignmentList.php',
        'UnifaunWsdl\Consignment' => __DIR__ .'/Consignment.php',
        'UnifaunWsdl\Part' => __DIR__ .'/Part.php',
        'UnifaunWsdl\Address' => __DIR__ .'/Address.php',
        'UnifaunWsdl\Communication' => __DIR__ .'/Communication.php',
        'UnifaunWsdl\Reference' => __DIR__ .'/Reference.php',
        'UnifaunWsdl\ConsignmentReference' => __DIR__ .'/ConsignmentReference.php',
        'UnifaunWsdl\GoodsGroup' => __DIR__ .'/GoodsGroup.php',
        'UnifaunWsdl\GoodsGroupItem' => __DIR__ .'/GoodsGroupItem.php',
        'UnifaunWsdl\GoodsItem' => __DIR__ .'/GoodsItem.php',
        'UnifaunWsdl\PackageIds' => __DIR__ .'/PackageIds.php',
        'UnifaunWsdl\DangerousGoods' => __DIR__ .'/DangerousGoods.php',
        'UnifaunWsdl\Category' => __DIR__ .'/Category.php',
        'UnifaunWsdl\TransportProduct' => __DIR__ .'/TransportProduct.php',
        'UnifaunWsdl\Target' => __DIR__ .'/Target.php',
        'UnifaunWsdl\Contents' => __DIR__ .'/Contents.php',
        'UnifaunWsdl\ContentItem' => __DIR__ .'/ContentItem.php',
        'UnifaunWsdl\GoodsInvoice' => __DIR__ .'/GoodsInvoice.php',
        'UnifaunWsdl\InvoiceNote' => __DIR__ .'/InvoiceNote.php',
        'UnifaunWsdl\Note' => __DIR__ .'/Note.php',
        'UnifaunWsdl\PaymentInstruction' => __DIR__ .'/PaymentInstruction.php',
        'UnifaunWsdl\AddService' => __DIR__ .'/AddService.php',
        'UnifaunWsdl\Tod' => __DIR__ .'/Tod.php',
        'UnifaunWsdl\Cod' => __DIR__ .'/Cod.php',
        'UnifaunWsdl\Pickup' => __DIR__ .'/Pickup.php',
        'UnifaunWsdl\Delivery' => __DIR__ .'/Delivery.php',
        'UnifaunWsdl\Transport' => __DIR__ .'/Transport.php',
        'UnifaunWsdl\CustomsClearance' => __DIR__ .'/CustomsClearance.php',
        'UnifaunWsdl\Sortcode' => __DIR__ .'/Sortcode.php',
        'UnifaunWsdl\Insurance' => __DIR__ .'/Insurance.php',
        'UnifaunWsdl\email' => __DIR__ .'/email.php',
        'UnifaunWsdl\mobile' => __DIR__ .'/mobile.php',
        'UnifaunWsdl\ServiceOption' => __DIR__ .'/ServiceOption.php',
        'UnifaunWsdl\ServiceOptionItem' => __DIR__ .'/ServiceOptionItem.php',
        'UnifaunWsdl\Error' => __DIR__ .'/Error.php',
        'UnifaunWsdl\AuthenticationToken' => __DIR__ .'/AuthenticationToken.php',
        'UnifaunWsdl\ServiceException' => __DIR__ .'/ServiceException.php',
        'UnifaunWsdl\ConsignmentResult' => __DIR__ .'/ConsignmentResult.php',
        'UnifaunWsdl\Document' => __DIR__ .'/Document.php',
        'UnifaunWsdl\Receipt' => __DIR__ .'/Receipt.php',
        'UnifaunWsdl\Notification' => __DIR__ .'/Notification.php',
        'UnifaunWsdl\PrintResult' => __DIR__ .'/PrintResult.php',
        'UnifaunWsdl\PriceResultList' => __DIR__ .'/PriceResultList.php',
        'UnifaunWsdl\PriceResult' => __DIR__ .'/PriceResult.php',
        'UnifaunWsdl\CalculatedPrice' => __DIR__ .'/CalculatedPrice.php',
        'UnifaunWsdl\PriceDetail' => __DIR__ .'/PriceDetail.php',
        'UnifaunWsdl\archive' => __DIR__ .'/archive.php',
        'UnifaunWsdl\archiveResponse' => __DIR__ .'/archiveResponse.php',
        'UnifaunWsdl\book' => __DIR__ .'/book.php',
        'UnifaunWsdl\bookResponse' => __DIR__ .'/bookResponse.php',
        'UnifaunWsdl\consolidate' => __DIR__ .'/consolidate.php',
        'UnifaunWsdl\consolidateResponse' => __DIR__ .'/consolidateResponse.php',
        'UnifaunWsdl\copy' => __DIR__ .'/copy.php',
        'UnifaunWsdl\copyResponse' => __DIR__ .'/copyResponse.php',
        'UnifaunWsdl\create' => __DIR__ .'/create.php',
        'UnifaunWsdl\createResponse' => __DIR__ .'/createResponse.php',
        'UnifaunWsdl\delete' => __DIR__ .'/delete.php',
        'UnifaunWsdl\deleteResponse' => __DIR__ .'/deleteResponse.php',
        'UnifaunWsdl\findByConsignmentId' => __DIR__ .'/findByConsignmentId.php',
        'UnifaunWsdl\findByConsignmentIdResponse' => __DIR__ .'/findByConsignmentIdResponse.php',
        'UnifaunWsdl\findByConsignmentNo' => __DIR__ .'/findByConsignmentNo.php',
        'UnifaunWsdl\findByConsignmentNoResponse' => __DIR__ .'/findByConsignmentNoResponse.php',
        'UnifaunWsdl\findByConsignorReference' => __DIR__ .'/findByConsignorReference.php',
        'UnifaunWsdl\findByConsignorReferenceResponse' => __DIR__ .'/findByConsignorReferenceResponse.php',
        'UnifaunWsdl\findById' => __DIR__ .'/findById.php',
        'UnifaunWsdl\findByIdResponse' => __DIR__ .'/findByIdResponse.php',
        'UnifaunWsdl\findByPackageId' => __DIR__ .'/findByPackageId.php',
        'UnifaunWsdl\findByPackageIdResponse' => __DIR__ .'/findByPackageIdResponse.php',
        'UnifaunWsdl\findByReference' => __DIR__ .'/findByReference.php',
        'UnifaunWsdl\findByReferenceResponse' => __DIR__ .'/findByReferenceResponse.php',
        'UnifaunWsdl\findByTransactionId' => __DIR__ .'/findByTransactionId.php',
        'UnifaunWsdl\findByTransactionIdResponse' => __DIR__ .'/findByTransactionIdResponse.php',
        'UnifaunWsdl\getTransactionId' => __DIR__ .'/getTransactionId.php',
        'UnifaunWsdl\getTransactionIdResponse' => __DIR__ .'/getTransactionIdResponse.php',
        'UnifaunWsdl\isArchived' => __DIR__ .'/isArchived.php',
        'UnifaunWsdl\isArchivedResponse' => __DIR__ .'/isArchivedResponse.php',
        'UnifaunWsdl\isBooked' => __DIR__ .'/isBooked.php',
        'UnifaunWsdl\isBookedResponse' => __DIR__ .'/isBookedResponse.php',
        'UnifaunWsdl\isComplete' => __DIR__ .'/isComplete.php',
        'UnifaunWsdl\isCompleteResponse' => __DIR__ .'/isCompleteResponse.php',
        'UnifaunWsdl\isOrdered' => __DIR__ .'/isOrdered.php',
        'UnifaunWsdl\isOrderedResponse' => __DIR__ .'/isOrderedResponse.php',
        'UnifaunWsdl\isPrintable' => __DIR__ .'/isPrintable.php',
        'UnifaunWsdl\isPrintableResponse' => __DIR__ .'/isPrintableResponse.php',
        'UnifaunWsdl\isPrinted' => __DIR__ .'/isPrinted.php',
        'UnifaunWsdl\isPrintedResponse' => __DIR__ .'/isPrintedResponse.php',
        'UnifaunWsdl\order' => __DIR__ .'/order.php',
        'UnifaunWsdl\orderResponse' => __DIR__ .'/orderResponse.php',
        'UnifaunWsdl\printCustom' => __DIR__ .'/printCustom.php',
        'UnifaunWsdl\printLabel' => __DIR__ .'/printLabel.php',
        'UnifaunWsdl\printWaybill' => __DIR__ .'/printWaybill.php',
        'UnifaunWsdl\printResponse' => __DIR__ .'/printResponse.php',
        'UnifaunWsdl\save' => __DIR__ .'/save.php',
        'UnifaunWsdl\saveResponse' => __DIR__ .'/saveResponse.php',
        'UnifaunWsdl\split' => __DIR__ .'/split.php',
        'UnifaunWsdl\splitResponse' => __DIR__ .'/splitResponse.php',
        'UnifaunWsdl\ConsignmentServiceException' => __DIR__ .'/ConsignmentServiceException.php',
        'UnifaunWsdl\getCalculatedPrice' => __DIR__ .'/getCalculatedPrice.php',
        'UnifaunWsdl\getCalculatedPriceResponse' => __DIR__ .'/getCalculatedPriceResponse.php',
        'UnifaunWsdl\GoodsItemResult' => __DIR__ .'/GoodsItemResult.php',
        'UnifaunWsdl\cancelResult' => __DIR__ .'/cancelResult.php',
        'UnifaunWsdl\addGoodsRow' => __DIR__ .'/addGoodsRow.php',
        'UnifaunWsdl\addGoodsRowResponse' => __DIR__ .'/addGoodsRowResponse.php',
        'UnifaunWsdl\deletePackageId' => __DIR__ .'/deletePackageId.php',
        'UnifaunWsdl\deletePackageIdResponse' => __DIR__ .'/deletePackageIdResponse.php',
        'UnifaunWsdl\cancel' => __DIR__ .'/cancel.php',
        'UnifaunWsdl\cancelResponse' => __DIR__ .'/cancelResponse.php',
        'UnifaunWsdl\getConsignmentTemplates' => __DIR__ .'/getConsignmentTemplates.php',
        'UnifaunWsdl\getConsignmentTemplatesResponse' => __DIR__ .'/getConsignmentTemplatesResponse.php',
        'UnifaunWsdl\ConsignmentTemplatesResult' => __DIR__ .'/ConsignmentTemplatesResult.php',
        'UnifaunWsdl\ConsignmentTemplate' => __DIR__ .'/ConsignmentTemplate.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_eb95fabc8ffe0ebdbe1b11ce27386fc7');

// Do nothing. The rest is just leftovers from the code generation.
{
}