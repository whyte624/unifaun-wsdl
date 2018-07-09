<?php

namespace UnifaunWsdl;

class ConsignmentWS extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ConsignmentList' => 'UnifaunWsdl\\ConsignmentList',
      'Consignment' => 'UnifaunWsdl\\Consignment',
      'Part' => 'UnifaunWsdl\\Part',
      'Address' => 'UnifaunWsdl\\Address',
      'Communication' => 'UnifaunWsdl\\Communication',
      'Reference' => 'UnifaunWsdl\\Reference',
      'ConsignmentReference' => 'UnifaunWsdl\\ConsignmentReference',
      'GoodsGroup' => 'UnifaunWsdl\\GoodsGroup',
      'GoodsGroupItem' => 'UnifaunWsdl\\GoodsGroupItem',
      'GoodsItem' => 'UnifaunWsdl\\GoodsItem',
      'PackageIds' => 'UnifaunWsdl\\PackageIds',
      'DangerousGoods' => 'UnifaunWsdl\\DangerousGoods',
      'Category' => 'UnifaunWsdl\\Category',
      'TransportProduct' => 'UnifaunWsdl\\TransportProduct',
      'Target' => 'UnifaunWsdl\\Target',
      'Contents' => 'UnifaunWsdl\\Contents',
      'ContentItem' => 'UnifaunWsdl\\ContentItem',
      'GoodsInvoice' => 'UnifaunWsdl\\GoodsInvoice',
      'InvoiceNote' => 'UnifaunWsdl\\InvoiceNote',
      'Note' => 'UnifaunWsdl\\Note',
      'PaymentInstruction' => 'UnifaunWsdl\\PaymentInstruction',
      'AddService' => 'UnifaunWsdl\\AddService',
      'Tod' => 'UnifaunWsdl\\Tod',
      'Cod' => 'UnifaunWsdl\\Cod',
      'Pickup' => 'UnifaunWsdl\\Pickup',
      'Delivery' => 'UnifaunWsdl\\Delivery',
      'Transport' => 'UnifaunWsdl\\Transport',
      'CustomsClearance' => 'UnifaunWsdl\\CustomsClearance',
      'Sortcode' => 'UnifaunWsdl\\Sortcode',
      'Insurance' => 'UnifaunWsdl\\Insurance',
      'email' => 'UnifaunWsdl\\email',
      'mobile' => 'UnifaunWsdl\\mobile',
      'ServiceOption' => 'UnifaunWsdl\\ServiceOption',
      'ServiceOptionItem' => 'UnifaunWsdl\\ServiceOptionItem',
      'Error' => 'UnifaunWsdl\\Error',
      'AuthenticationToken' => 'UnifaunWsdl\\AuthenticationToken',
      'ServiceException' => 'UnifaunWsdl\\ServiceException',
      'ConsignmentResult' => 'UnifaunWsdl\\ConsignmentResult',
      'Document' => 'UnifaunWsdl\\Document',
      'Receipt' => 'UnifaunWsdl\\Receipt',
      'Notification' => 'UnifaunWsdl\\Notification',
      'PrintResult' => 'UnifaunWsdl\\PrintResult',
      'PriceResultList' => 'UnifaunWsdl\\PriceResultList',
      'PriceResult' => 'UnifaunWsdl\\PriceResult',
      'CalculatedPrice' => 'UnifaunWsdl\\CalculatedPrice',
      'PriceDetail' => 'UnifaunWsdl\\PriceDetail',
      'archive' => 'UnifaunWsdl\\archive',
      'archiveResponse' => 'UnifaunWsdl\\archiveResponse',
      'book' => 'UnifaunWsdl\\book',
      'bookResponse' => 'UnifaunWsdl\\bookResponse',
      'consolidate' => 'UnifaunWsdl\\consolidate',
      'consolidateResponse' => 'UnifaunWsdl\\consolidateResponse',
      'copy' => 'UnifaunWsdl\\copy',
      'copyResponse' => 'UnifaunWsdl\\copyResponse',
      'create' => 'UnifaunWsdl\\create',
      'createResponse' => 'UnifaunWsdl\\createResponse',
      'delete' => 'UnifaunWsdl\\delete',
      'deleteResponse' => 'UnifaunWsdl\\deleteResponse',
      'findByConsignmentId' => 'UnifaunWsdl\\findByConsignmentId',
      'findByConsignmentIdResponse' => 'UnifaunWsdl\\findByConsignmentIdResponse',
      'findByConsignmentNo' => 'UnifaunWsdl\\findByConsignmentNo',
      'findByConsignmentNoResponse' => 'UnifaunWsdl\\findByConsignmentNoResponse',
      'findByConsignorReference' => 'UnifaunWsdl\\findByConsignorReference',
      'findByConsignorReferenceResponse' => 'UnifaunWsdl\\findByConsignorReferenceResponse',
      'findById' => 'UnifaunWsdl\\findById',
      'findByIdResponse' => 'UnifaunWsdl\\findByIdResponse',
      'findByPackageId' => 'UnifaunWsdl\\findByPackageId',
      'findByPackageIdResponse' => 'UnifaunWsdl\\findByPackageIdResponse',
      'findByReference' => 'UnifaunWsdl\\findByReference',
      'findByReferenceResponse' => 'UnifaunWsdl\\findByReferenceResponse',
      'findByTransactionId' => 'UnifaunWsdl\\findByTransactionId',
      'findByTransactionIdResponse' => 'UnifaunWsdl\\findByTransactionIdResponse',
      'getTransactionId' => 'UnifaunWsdl\\getTransactionId',
      'getTransactionIdResponse' => 'UnifaunWsdl\\getTransactionIdResponse',
      'isArchived' => 'UnifaunWsdl\\isArchived',
      'isArchivedResponse' => 'UnifaunWsdl\\isArchivedResponse',
      'isBooked' => 'UnifaunWsdl\\isBooked',
      'isBookedResponse' => 'UnifaunWsdl\\isBookedResponse',
      'isComplete' => 'UnifaunWsdl\\isComplete',
      'isCompleteResponse' => 'UnifaunWsdl\\isCompleteResponse',
      'isOrdered' => 'UnifaunWsdl\\isOrdered',
      'isOrderedResponse' => 'UnifaunWsdl\\isOrderedResponse',
      'isPrintable' => 'UnifaunWsdl\\isPrintable',
      'isPrintableResponse' => 'UnifaunWsdl\\isPrintableResponse',
      'isPrinted' => 'UnifaunWsdl\\isPrinted',
      'isPrintedResponse' => 'UnifaunWsdl\\isPrintedResponse',
      'order' => 'UnifaunWsdl\\order',
      'orderResponse' => 'UnifaunWsdl\\orderResponse',
      'print' => 'UnifaunWsdl\\printCustom',
      'printLabel' => 'UnifaunWsdl\\printLabel',
      'printWaybill' => 'UnifaunWsdl\\printWaybill',
      'printResponse' => 'UnifaunWsdl\\printResponse',
      'save' => 'UnifaunWsdl\\save',
      'saveResponse' => 'UnifaunWsdl\\saveResponse',
      'split' => 'UnifaunWsdl\\split',
      'splitResponse' => 'UnifaunWsdl\\splitResponse',
      'ConsignmentServiceException' => 'UnifaunWsdl\\ConsignmentServiceException',
      'getCalculatedPrice' => 'UnifaunWsdl\\getCalculatedPrice',
      'getCalculatedPriceResponse' => 'UnifaunWsdl\\getCalculatedPriceResponse',
      'GoodsItemResult' => 'UnifaunWsdl\\GoodsItemResult',
      'cancelResult' => 'UnifaunWsdl\\cancelResult',
      'addGoodsRow' => 'UnifaunWsdl\\addGoodsRow',
      'addGoodsRowResponse' => 'UnifaunWsdl\\addGoodsRowResponse',
      'deletePackageId' => 'UnifaunWsdl\\deletePackageId',
      'deletePackageIdResponse' => 'UnifaunWsdl\\deletePackageIdResponse',
      'cancel' => 'UnifaunWsdl\\cancel',
      'cancelResponse' => 'UnifaunWsdl\\cancelResponse',
      'getConsignmentTemplates' => 'UnifaunWsdl\\getConsignmentTemplates',
      'getConsignmentTemplatesResponse' => 'UnifaunWsdl\\getConsignmentTemplatesResponse',
      'ConsignmentTemplatesResult' => 'UnifaunWsdl\\ConsignmentTemplatesResult',
      'ConsignmentTemplate' => 'UnifaunWsdl\\ConsignmentTemplate',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(), $wsdl = null)
    {
      foreach (self::$classmap as $key => $value) {
        if (!isset($options['classmap'][$key])) {
          $options['classmap'][$key] = $value;
        }
      }
      $options = array_merge(array (
      'features' => 1,
    ), $options);
      if (!$wsdl) {
        $wsdl = 'https://service.web-ta.net/ws/services/ConsignmentWS?wsdl';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * @param archive $parameters
     * @return archiveResponse
     */
    public function archive(archive $parameters)
    {
      return $this->__soapCall('archive', array($parameters));
    }

    /**
     * @param book $parameters
     * @return bookResponse
     */
    public function book(book $parameters)
    {
      return $this->__soapCall('book', array($parameters));
    }

    /**
     * @param consolidate $parameters
     * @return consolidateResponse
     */
    public function consolidate(consolidate $parameters)
    {
      return $this->__soapCall('consolidate', array($parameters));
    }

    /**
     * @param copy $parameters
     * @return copyResponse
     */
    public function copy(copy $parameters)
    {
      return $this->__soapCall('copy', array($parameters));
    }

    /**
     * @param create $parameters
     * @return createResponse
     */
    public function create(create $parameters)
    {
      return $this->__soapCall('create', array($parameters));
    }

    /**
     * @param delete $parameters
     * @return deleteResponse
     */
    public function delete(delete $parameters)
    {
      return $this->__soapCall('delete', array($parameters));
    }

    /**
     * @param findByConsignmentId $parameters
     * @return findByConsignmentIdResponse
     */
    public function findByConsignmentId(findByConsignmentId $parameters)
    {
      return $this->__soapCall('findByConsignmentId', array($parameters));
    }

    /**
     * @param findByConsignmentNo $parameters
     * @return findByConsignmentNoResponse
     */
    public function findByConsignmentNo(findByConsignmentNo $parameters)
    {
      return $this->__soapCall('findByConsignmentNo', array($parameters));
    }

    /**
     * @param findByConsignorReference $parameters
     * @return findByConsignorReferenceResponse
     */
    public function findByConsignorReference(findByConsignorReference $parameters)
    {
      return $this->__soapCall('findByConsignorReference', array($parameters));
    }

    /**
     * @param findById $parameters
     * @return findByIdResponse
     */
    public function findById(findById $parameters)
    {
      return $this->__soapCall('findById', array($parameters));
    }

    /**
     * @param findByPackageId $parameters
     * @return findByPackageIdResponse
     */
    public function findByPackageId(findByPackageId $parameters)
    {
      return $this->__soapCall('findByPackageId', array($parameters));
    }

    /**
     * @param findByReference $parameters
     * @return findByReferenceResponse
     */
    public function findByReference(findByReference $parameters)
    {
      return $this->__soapCall('findByReference', array($parameters));
    }

    /**
     * @param findByTransactionId $parameters
     * @return findByTransactionIdResponse
     */
    public function findByTransactionId(findByTransactionId $parameters)
    {
      return $this->__soapCall('findByTransactionId', array($parameters));
    }

    /**
     * @param getTransactionId $parameters
     * @return getTransactionIdResponse
     */
    public function getTransactionId(getTransactionId $parameters)
    {
      return $this->__soapCall('getTransactionId', array($parameters));
    }

    /**
     * @param isArchived $parameters
     * @return isArchivedResponse
     */
    public function isArchived(isArchived $parameters)
    {
      return $this->__soapCall('isArchived', array($parameters));
    }

    /**
     * @param isBooked $parameters
     * @return isBookedResponse
     */
    public function isBooked(isBooked $parameters)
    {
      return $this->__soapCall('isBooked', array($parameters));
    }

    /**
     * @param isComplete $parameters
     * @return isCompleteResponse
     */
    public function isComplete(isComplete $parameters)
    {
      return $this->__soapCall('isComplete', array($parameters));
    }

    /**
     * @param isOrdered $parameters
     * @return isOrderedResponse
     */
    public function isOrdered(isOrdered $parameters)
    {
      return $this->__soapCall('isOrdered', array($parameters));
    }

    /**
     * @param isPrintable $parameters
     * @return isPrintableResponse
     */
    public function isPrintable(isPrintable $parameters)
    {
      return $this->__soapCall('isPrintable', array($parameters));
    }

    /**
     * @param isPrinted $parameters
     * @return isPrintedResponse
     */
    public function isPrinted(isPrinted $parameters)
    {
      return $this->__soapCall('isPrinted', array($parameters));
    }

    /**
     * @param order $parameters
     * @return orderResponse
     */
    public function order(order $parameters)
    {
      return $this->__soapCall('order', array($parameters));
    }

    /**
     * @param printCustom $parameters
     * @return printResponse
     */
    public function aPrint($parameters)
    {
      return $this->__soapCall('print', array($parameters));
    }

    /**
     * @param printLabel $parameters
     * @return printResponse
     */
    public function printLabel(printLabel $parameters)
    {
      return $this->__soapCall('printLabel', array($parameters));
    }

    /**
     * @param printWaybill $parameters
     * @return printResponse
     */
    public function printWaybill(printWaybill $parameters)
    {
      return $this->__soapCall('printWaybill', array($parameters));
    }

    /**
     * @param save $parameters
     * @return saveResponse
     */
    public function save(save $parameters)
    {
      return $this->__soapCall('save', array($parameters));
    }

    /**
     * @param split $parameters
     * @return splitResponse
     */
    public function split(split $parameters)
    {
      return $this->__soapCall('split', array($parameters));
    }

    /**
     * @param getCalculatedPrice $parameters
     * @return getCalculatedPriceResponse
     */
    public function getCalculatedPrice(getCalculatedPrice $parameters)
    {
      return $this->__soapCall('getCalculatedPrice', array($parameters));
    }

    /**
     * @param addGoodsRow $parameters
     * @return addGoodsRowResponse
     */
    public function addGoodsRow(addGoodsRow $parameters)
    {
      return $this->__soapCall('addGoodsRow', array($parameters));
    }

    /**
     * @param deletePackageId $parameters
     * @return deletePackageIdResponse
     */
    public function deletePackageId(deletePackageId $parameters)
    {
      return $this->__soapCall('deletePackageId', array($parameters));
    }

    /**
     * @param cancel $parameters
     * @return cancelResponse
     */
    public function cancel(cancel $parameters)
    {
      return $this->__soapCall('cancel', array($parameters));
    }

    /**
     * @param getConsignmentTemplates $parameters
     * @return getConsignmentTemplatesResponse
     */
    public function getConsignmentTemplates(getConsignmentTemplates $parameters)
    {
      return $this->__soapCall('getConsignmentTemplates', array($parameters));
    }

}
