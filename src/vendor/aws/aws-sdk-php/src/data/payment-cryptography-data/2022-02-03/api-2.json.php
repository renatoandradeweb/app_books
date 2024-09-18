<?php

// This file was auto-generated from sdk-root/src/data/payment-cryptography-data/2022-02-03/api-2.json
return [ 'version' => '2.0', 'metadata' => [ 'apiVersion' => '2022-02-03', 'auth' => [ 'aws.auth#sigv4', ], 'endpointPrefix' => 'dataplane.payment-cryptography', 'protocol' => 'rest-json', 'protocols' => [ 'rest-json', ], 'serviceFullName' => 'Payment Cryptography Data Plane', 'serviceId' => 'Payment Cryptography Data', 'signatureVersion' => 'v4', 'signingName' => 'payment-cryptography', 'uid' => 'payment-cryptography-data-2022-02-03', ], 'operations' => [ 'DecryptData' => [ 'name' => 'DecryptData', 'http' => [ 'method' => 'POST', 'requestUri' => '/keys/{KeyIdentifier}/decrypt', 'responseCode' => 200, ], 'input' => [ 'shape' => 'DecryptDataInput', ], 'output' => [ 'shape' => 'DecryptDataOutput', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'InternalServerException', ], ], ], 'EncryptData' => [ 'name' => 'EncryptData', 'http' => [ 'method' => 'POST', 'requestUri' => '/keys/{KeyIdentifier}/encrypt', 'responseCode' => 200, ], 'input' => [ 'shape' => 'EncryptDataInput', ], 'output' => [ 'shape' => 'EncryptDataOutput', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'InternalServerException', ], ], ], 'GenerateCardValidationData' => [ 'name' => 'GenerateCardValidationData', 'http' => [ 'method' => 'POST', 'requestUri' => '/cardvalidationdata/generate', 'responseCode' => 200, ], 'input' => [ 'shape' => 'GenerateCardValidationDataInput', ], 'output' => [ 'shape' => 'GenerateCardValidationDataOutput', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'InternalServerException', ], ], ], 'GenerateMac' => [ 'name' => 'GenerateMac', 'http' => [ 'method' => 'POST', 'requestUri' => '/mac/generate', 'responseCode' => 200, ], 'input' => [ 'shape' => 'GenerateMacInput', ], 'output' => [ 'shape' => 'GenerateMacOutput', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'InternalServerException', ], ], ], 'GeneratePinData' => [ 'name' => 'GeneratePinData', 'http' => [ 'method' => 'POST', 'requestUri' => '/pindata/generate', 'responseCode' => 200, ], 'input' => [ 'shape' => 'GeneratePinDataInput', ], 'output' => [ 'shape' => 'GeneratePinDataOutput', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'InternalServerException', ], ], ], 'ReEncryptData' => [ 'name' => 'ReEncryptData', 'http' => [ 'method' => 'POST', 'requestUri' => '/keys/{IncomingKeyIdentifier}/reencrypt', 'responseCode' => 200, ], 'input' => [ 'shape' => 'ReEncryptDataInput', ], 'output' => [ 'shape' => 'ReEncryptDataOutput', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'InternalServerException', ], ], ], 'TranslatePinData' => [ 'name' => 'TranslatePinData', 'http' => [ 'method' => 'POST', 'requestUri' => '/pindata/translate', 'responseCode' => 200, ], 'input' => [ 'shape' => 'TranslatePinDataInput', ], 'output' => [ 'shape' => 'TranslatePinDataOutput', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'InternalServerException', ], ], ], 'VerifyAuthRequestCryptogram' => [ 'name' => 'VerifyAuthRequestCryptogram', 'http' => [ 'method' => 'POST', 'requestUri' => '/cryptogram/verify', 'responseCode' => 200, ], 'input' => [ 'shape' => 'VerifyAuthRequestCryptogramInput', ], 'output' => [ 'shape' => 'VerifyAuthRequestCryptogramOutput', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'VerificationFailedException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'InternalServerException', ], ], ], 'VerifyCardValidationData' => [ 'name' => 'VerifyCardValidationData', 'http' => [ 'method' => 'POST', 'requestUri' => '/cardvalidationdata/verify', 'responseCode' => 200, ], 'input' => [ 'shape' => 'VerifyCardValidationDataInput', ], 'output' => [ 'shape' => 'VerifyCardValidationDataOutput', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'VerificationFailedException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'InternalServerException', ], ], ], 'VerifyMac' => [ 'name' => 'VerifyMac', 'http' => [ 'method' => 'POST', 'requestUri' => '/mac/verify', 'responseCode' => 200, ], 'input' => [ 'shape' => 'VerifyMacInput', ], 'output' => [ 'shape' => 'VerifyMacOutput', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'VerificationFailedException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'InternalServerException', ], ], ], 'VerifyPinData' => [ 'name' => 'VerifyPinData', 'http' => [ 'method' => 'POST', 'requestUri' => '/pindata/verify', 'responseCode' => 200, ], 'input' => [ 'shape' => 'VerifyPinDataInput', ], 'output' => [ 'shape' => 'VerifyPinDataOutput', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'VerificationFailedException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'InternalServerException', ], ], ], ], 'shapes' => [ 'AccessDeniedException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'String', ], ], 'error' => [ 'httpStatusCode' => 403, 'senderFault' => true, ], 'exception' => true, ], 'AmexCardSecurityCodeVersion1' => [ 'type' => 'structure', 'required' => [ 'CardExpiryDate', ], 'members' => [ 'CardExpiryDate' => [ 'shape' => 'CardExpiryDateType', ], ], ], 'AmexCardSecurityCodeVersion2' => [ 'type' => 'structure', 'required' => [ 'CardExpiryDate', 'ServiceCode', ], 'members' => [ 'CardExpiryDate' => [ 'shape' => 'CardExpiryDateType', ], 'ServiceCode' => [ 'shape' => 'ServiceCodeType', ], ], ], 'ApplicationCryptogramType' => [ 'type' => 'string', 'max' => 16, 'min' => 16, 'pattern' => '[0-9a-fA-F]+', 'sensitive' => true, ], 'AsymmetricEncryptionAttributes' => [ 'type' => 'structure', 'members' => [ 'PaddingType' => [ 'shape' => 'PaddingType', ], ], ], 'AuthRequestCryptogramType' => [ 'type' => 'string', 'max' => 16, 'min' => 16, 'pattern' => '[0-9a-fA-F]+', 'sensitive' => true, ], 'AuthResponseValueType' => [ 'type' => 'string', 'max' => 16, 'min' => 1, 'pattern' => '[0-9a-fA-F]+', 'sensitive' => true, ], 'CardExpiryDateType' => [ 'type' => 'string', 'max' => 4, 'min' => 4, 'pattern' => '[0-9]+', 'sensitive' => true, ], 'CardGenerationAttributes' => [ 'type' => 'structure', 'members' => [ 'AmexCardSecurityCodeVersion1' => [ 'shape' => 'AmexCardSecurityCodeVersion1', ], 'AmexCardSecurityCodeVersion2' => [ 'shape' => 'AmexCardSecurityCodeVersion2', ], 'CardVerificationValue1' => [ 'shape' => 'CardVerificationValue1', ], 'CardVerificationValue2' => [ 'shape' => 'CardVerificationValue2', ], 'CardHolderVerificationValue' => [ 'shape' => 'CardHolderVerificationValue', ], 'DynamicCardVerificationCode' => [ 'shape' => 'DynamicCardVerificationCode', ], 'DynamicCardVerificationValue' => [ 'shape' => 'DynamicCardVerificationValue', ], ], 'union' => true, ], 'CardHolderVerificationValue' => [ 'type' => 'structure', 'required' => [ 'UnpredictableNumber', 'PanSequenceNumber', 'ApplicationTransactionCounter', ], 'members' => [ 'UnpredictableNumber' => [ 'shape' => 'HexLengthBetween2And8', ], 'PanSequenceNumber' => [ 'shape' => 'NumberLengthEquals2', ], 'ApplicationTransactionCounter' => [ 'shape' => 'HexLengthBetween2And4', ], ], ], 'CardVerificationAttributes' => [ 'type' => 'structure', 'members' => [ 'AmexCardSecurityCodeVersion1' => [ 'shape' => 'AmexCardSecurityCodeVersion1', ], 'AmexCardSecurityCodeVersion2' => [ 'shape' => 'AmexCardSecurityCodeVersion2', ], 'CardVerificationValue1' => [ 'shape' => 'CardVerificationValue1', ], 'CardVerificationValue2' => [ 'shape' => 'CardVerificationValue2', ], 'CardHolderVerificationValue' => [ 'shape' => 'CardHolderVerificationValue', ], 'DynamicCardVerificationCode' => [ 'shape' => 'DynamicCardVerificationCode', ], 'DynamicCardVerificationValue' => [ 'shape' => 'DynamicCardVerificationValue', ], 'DiscoverDynamicCardVerificationCode' => [ 'shape' => 'DiscoverDynamicCardVerificationCode', ], ], 'union' => true, ], 'CardVerificationValue1' => [ 'type' => 'structure', 'required' => [ 'CardExpiryDate', 'ServiceCode', ], 'members' => [ 'CardExpiryDate' => [ 'shape' => 'CardExpiryDateType', ], 'ServiceCode' => [ 'shape' => 'ServiceCodeType', ], ], ], 'CardVerificationValue2' => [ 'type' => 'structure', 'required' => [ 'CardExpiryDate', ], 'members' => [ 'CardExpiryDate' => [ 'shape' => 'CardExpiryDateType', ], ], ], 'CipherTextType' => [ 'type' => 'string', 'max' => 4096, 'min' => 16, 'pattern' => '(?:[0-9a-fA-F][0-9a-fA-F])+', 'sensitive' => true, ], 'CryptogramAuthResponse' => [ 'type' => 'structure', 'members' => [ 'ArpcMethod1' => [ 'shape' => 'CryptogramVerificationArpcMethod1', ], 'ArpcMethod2' => [ 'shape' => 'CryptogramVerificationArpcMethod2', ], ], 'union' => true, ], 'CryptogramVerificationArpcMethod1' => [ 'type' => 'structure', 'required' => [ 'AuthResponseCode', ], 'members' => [ 'AuthResponseCode' => [ 'shape' => 'HexLengthEquals4', ], ], ], 'CryptogramVerificationArpcMethod2' => [ 'type' => 'structure', 'required' => [ 'CardStatusUpdate', ], 'members' => [ 'CardStatusUpdate' => [ 'shape' => 'HexLengthEquals8', ], 'ProprietaryAuthenticationData' => [ 'shape' => 'ProprietaryAuthenticationDataType', ], ], ], 'DecimalizationTableType' => [ 'type' => 'string', 'max' => 16, 'min' => 16, 'pattern' => '[0-9]+', 'sensitive' => true, ], 'DecryptDataInput' => [ 'type' => 'structure', 'required' => [ 'KeyIdentifier', 'CipherText', 'DecryptionAttributes', ], 'members' => [ 'KeyIdentifier' => [ 'shape' => 'KeyArnOrKeyAliasType', 'location' => 'uri', 'locationName' => 'KeyIdentifier', ], 'CipherText' => [ 'shape' => 'CipherTextType', ], 'DecryptionAttributes' => [ 'shape' => 'EncryptionDecryptionAttributes', ], 'WrappedKey' => [ 'shape' => 'WrappedKey', ], ], ], 'DecryptDataOutput' => [ 'type' => 'structure', 'required' => [ 'KeyArn', 'KeyCheckValue', 'PlainText', ], 'members' => [ 'KeyArn' => [ 'shape' => 'KeyArn', ], 'KeyCheckValue' => [ 'shape' => 'KeyCheckValue', ], 'PlainText' => [ 'shape' => 'PlainTextOutputType', ], ], ], 'DiscoverDynamicCardVerificationCode' => [ 'type' => 'structure', 'required' => [ 'CardExpiryDate', 'UnpredictableNumber', 'ApplicationTransactionCounter', ], 'members' => [ 'CardExpiryDate' => [ 'shape' => 'CardExpiryDateType', ], 'UnpredictableNumber' => [ 'shape' => 'HexLengthBetween2And8', ], 'ApplicationTransactionCounter' => [ 'shape' => 'HexLengthBetween2And4', ], ], ], 'DukptAttributes' => [ 'type' => 'structure', 'required' => [ 'KeySerialNumber', 'DukptDerivationType', ], 'members' => [ 'KeySerialNumber' => [ 'shape' => 'HexLengthBetween10And24', ], 'DukptDerivationType' => [ 'shape' => 'DukptDerivationType', ], ], ], 'DukptDerivationAttributes' => [ 'type' => 'structure', 'required' => [ 'KeySerialNumber', ], 'members' => [ 'KeySerialNumber' => [ 'shape' => 'HexLengthBetween10And24', ], 'DukptKeyDerivationType' => [ 'shape' => 'DukptDerivationType', ], 'DukptKeyVariant' => [ 'shape' => 'DukptKeyVariant', ], ], ], 'DukptDerivationType' => [ 'type' => 'string', 'enum' => [ 'TDES_2KEY', 'TDES_3KEY', 'AES_128', 'AES_192', 'AES_256', ], ], 'DukptEncryptionAttributes' => [ 'type' => 'structure', 'required' => [ 'KeySerialNumber', ], 'members' => [ 'KeySerialNumber' => [ 'shape' => 'HexLengthBetween10And24', ], 'Mode' => [ 'shape' => 'DukptEncryptionMode', ], 'DukptKeyDerivationType' => [ 'shape' => 'DukptDerivationType', ], 'DukptKeyVariant' => [ 'shape' => 'DukptKeyVariant', ], 'InitializationVector' => [ 'shape' => 'InitializationVectorType', ], ], ], 'DukptEncryptionMode' => [ 'type' => 'string', 'enum' => [ 'ECB', 'CBC', ], ], 'DukptKeyVariant' => [ 'type' => 'string', 'enum' => [ 'BIDIRECTIONAL', 'REQUEST', 'RESPONSE', ], ], 'DynamicCardVerificationCode' => [ 'type' => 'structure', 'required' => [ 'UnpredictableNumber', 'PanSequenceNumber', 'ApplicationTransactionCounter', 'TrackData', ], 'members' => [ 'UnpredictableNumber' => [ 'shape' => 'HexLengthBetween2And8', ], 'PanSequenceNumber' => [ 'shape' => 'NumberLengthEquals2', ], 'ApplicationTransactionCounter' => [ 'shape' => 'HexLengthBetween2And4', ], 'TrackData' => [ 'shape' => 'TrackDataType', ], ], ], 'DynamicCardVerificationValue' => [ 'type' => 'structure', 'required' => [ 'PanSequenceNumber', 'CardExpiryDate', 'ServiceCode', 'ApplicationTransactionCounter', ], 'members' => [ 'PanSequenceNumber' => [ 'shape' => 'NumberLengthEquals2', ], 'CardExpiryDate' => [ 'shape' => 'CardExpiryDateType', ], 'ServiceCode' => [ 'shape' => 'ServiceCodeType', ], 'ApplicationTransactionCounter' => [ 'shape' => 'HexLengthBetween2And4', ], ], ], 'EmvEncryptionAttributes' => [ 'type' => 'structure', 'required' => [ 'MajorKeyDerivationMode', 'PrimaryAccountNumber', 'PanSequenceNumber', 'SessionDerivationData', ], 'members' => [ 'MajorKeyDerivationMode' => [ 'shape' => 'EmvMajorKeyDerivationMode', ], 'PrimaryAccountNumber' => [ 'shape' => 'PrimaryAccountNumberType', ], 'PanSequenceNumber' => [ 'shape' => 'NumberLengthEquals2', ], 'SessionDerivationData' => [ 'shape' => 'SessionDerivationDataType', ], 'Mode' => [ 'shape' => 'EmvEncryptionMode', ], 'InitializationVector' => [ 'shape' => 'InitializationVectorType', ], ], ], 'EmvEncryptionMode' => [ 'type' => 'string', 'enum' => [ 'ECB', 'CBC', ], ], 'EmvMajorKeyDerivationMode' => [ 'type' => 'string', 'enum' => [ 'EMV_OPTION_A', 'EMV_OPTION_B', ], ], 'EncryptDataInput' => [ 'type' => 'structure', 'required' => [ 'KeyIdentifier', 'PlainText', 'EncryptionAttributes', ], 'members' => [ 'KeyIdentifier' => [ 'shape' => 'KeyArnOrKeyAliasType', 'location' => 'uri', 'locationName' => 'KeyIdentifier', ], 'PlainText' => [ 'shape' => 'PlainTextType', ], 'EncryptionAttributes' => [ 'shape' => 'EncryptionDecryptionAttributes', ], 'WrappedKey' => [ 'shape' => 'WrappedKey', ], ], ], 'EncryptDataOutput' => [ 'type' => 'structure', 'required' => [ 'KeyArn', 'CipherText', ], 'members' => [ 'KeyArn' => [ 'shape' => 'KeyArn', ], 'KeyCheckValue' => [ 'shape' => 'KeyCheckValue', ], 'CipherText' => [ 'shape' => 'CipherTextType', ], ], ], 'EncryptedPinBlockType' => [ 'type' => 'string', 'max' => 32, 'min' => 16, 'pattern' => '[0-9a-fA-F]+', 'sensitive' => true, ], 'EncryptionDecryptionAttributes' => [ 'type' => 'structure', 'members' => [ 'Symmetric' => [ 'shape' => 'SymmetricEncryptionAttributes', ], 'Asymmetric' => [ 'shape' => 'AsymmetricEncryptionAttributes', ], 'Dukpt' => [ 'shape' => 'DukptEncryptionAttributes', ], 'Emv' => [ 'shape' => 'EmvEncryptionAttributes', ], ], 'union' => true, ], 'EncryptionMode' => [ 'type' => 'string', 'enum' => [ 'ECB', 'CBC', 'CFB', 'CFB1', 'CFB8', 'CFB64', 'CFB128', 'OFB', ], ], 'GenerateCardValidationDataInput' => [ 'type' => 'structure', 'required' => [ 'KeyIdentifier', 'PrimaryAccountNumber', 'GenerationAttributes', ], 'members' => [ 'KeyIdentifier' => [ 'shape' => 'KeyArnOrKeyAliasType', ], 'PrimaryAccountNumber' => [ 'shape' => 'PrimaryAccountNumberType', ], 'GenerationAttributes' => [ 'shape' => 'CardGenerationAttributes', ], 'ValidationDataLength' => [ 'shape' => 'IntegerRangeBetween3And5Type', ], ], ], 'GenerateCardValidationDataOutput' => [ 'type' => 'structure', 'required' => [ 'KeyArn', 'KeyCheckValue', 'ValidationData', ], 'members' => [ 'KeyArn' => [ 'shape' => 'KeyArn', ], 'KeyCheckValue' => [ 'shape' => 'KeyCheckValue', ], 'ValidationData' => [ 'shape' => 'ValidationDataType', ], ], ], 'GenerateMacInput' => [ 'type' => 'structure', 'required' => [ 'KeyIdentifier', 'MessageData', 'GenerationAttributes', ], 'members' => [ 'KeyIdentifier' => [ 'shape' => 'KeyArnOrKeyAliasType', ], 'MessageData' => [ 'shape' => 'MessageDataType', ], 'GenerationAttributes' => [ 'shape' => 'MacAttributes', ], 'MacLength' => [ 'shape' => 'IntegerRangeBetween4And16', ], ], ], 'GenerateMacOutput' => [ 'type' => 'structure', 'required' => [ 'KeyArn', 'KeyCheckValue', 'Mac', ], 'members' => [ 'KeyArn' => [ 'shape' => 'KeyArn', ], 'KeyCheckValue' => [ 'shape' => 'KeyCheckValue', ], 'Mac' => [ 'shape' => 'MacOutputType', ], ], ], 'GeneratePinDataInput' => [ 'type' => 'structure', 'required' => [ 'GenerationKeyIdentifier', 'EncryptionKeyIdentifier', 'GenerationAttributes', 'PrimaryAccountNumber', 'PinBlockFormat', ], 'members' => [ 'GenerationKeyIdentifier' => [ 'shape' => 'KeyArnOrKeyAliasType', ], 'EncryptionKeyIdentifier' => [ 'shape' => 'KeyArnOrKeyAliasType', ], 'GenerationAttributes' => [ 'shape' => 'PinGenerationAttributes', ], 'PinDataLength' => [ 'shape' => 'IntegerRangeBetween4And12', ], 'PrimaryAccountNumber' => [ 'shape' => 'PrimaryAccountNumberType', ], 'PinBlockFormat' => [ 'shape' => 'PinBlockFormatForPinData', ], ], ], 'GeneratePinDataOutput' => [ 'type' => 'structure', 'required' => [ 'GenerationKeyArn', 'GenerationKeyCheckValue', 'EncryptionKeyArn', 'EncryptionKeyCheckValue', 'EncryptedPinBlock', 'PinData', ], 'members' => [ 'GenerationKeyArn' => [ 'shape' => 'KeyArn', ], 'GenerationKeyCheckValue' => [ 'shape' => 'KeyCheckValue', ], 'EncryptionKeyArn' => [ 'shape' => 'KeyArn', ], 'EncryptionKeyCheckValue' => [ 'shape' => 'KeyCheckValue', ], 'EncryptedPinBlock' => [ 'shape' => 'EncryptedPinBlockType', ], 'PinData' => [ 'shape' => 'PinData', ], ], ], 'HexEvenLengthBetween16And32' => [ 'type' => 'string', 'max' => 32, 'min' => 16, 'pattern' => '(?:[0-9a-fA-F][0-9a-fA-F])+', 'sensitive' => true, ], 'HexLengthBetween10And24' => [ 'type' => 'string', 'max' => 24, 'min' => 10, 'pattern' => '[0-9a-fA-F]+', ], 'HexLengthBetween2And4' => [ 'type' => 'string', 'max' => 4, 'min' => 2, 'pattern' => '[0-9a-fA-F]+', ], 'HexLengthBetween2And8' => [ 'type' => 'string', 'max' => 8, 'min' => 2, 'pattern' => '[0-9a-fA-F]+', ], 'HexLengthEquals1' => [ 'type' => 'string', 'max' => 1, 'min' => 1, 'pattern' => '[0-9A-F]+', ], 'HexLengthEquals4' => [ 'type' => 'string', 'max' => 4, 'min' => 4, 'pattern' => '[0-9a-fA-F]+', ], 'HexLengthEquals8' => [ 'type' => 'string', 'max' => 8, 'min' => 8, 'pattern' => '[0-9a-fA-F]+', ], 'Ibm3624NaturalPin' => [ 'type' => 'structure', 'required' => [ 'DecimalizationTable', 'PinValidationDataPadCharacter', 'PinValidationData', ], 'members' => [ 'DecimalizationTable' => [ 'shape' => 'DecimalizationTableType', ], 'PinValidationDataPadCharacter' => [ 'shape' => 'HexLengthEquals1', ], 'PinValidationData' => [ 'shape' => 'PinValidationDataType', ], ], ], 'Ibm3624PinFromOffset' => [ 'type' => 'structure', 'required' => [ 'DecimalizationTable', 'PinValidationDataPadCharacter', 'PinValidationData', 'PinOffset', ], 'members' => [ 'DecimalizationTable' => [ 'shape' => 'DecimalizationTableType', ], 'PinValidationDataPadCharacter' => [ 'shape' => 'HexLengthEquals1', ], 'PinValidationData' => [ 'shape' => 'PinValidationDataType', ], 'PinOffset' => [ 'shape' => 'PinOffsetType', ], ], ], 'Ibm3624PinOffset' => [ 'type' => 'structure', 'required' => [ 'EncryptedPinBlock', 'DecimalizationTable', 'PinValidationDataPadCharacter', 'PinValidationData', ], 'members' => [ 'EncryptedPinBlock' => [ 'shape' => 'EncryptedPinBlockType', ], 'DecimalizationTable' => [ 'shape' => 'DecimalizationTableType', ], 'PinValidationDataPadCharacter' => [ 'shape' => 'HexLengthEquals1', ], 'PinValidationData' => [ 'shape' => 'PinValidationDataType', ], ], ], 'Ibm3624PinVerification' => [ 'type' => 'structure', 'required' => [ 'DecimalizationTable', 'PinValidationDataPadCharacter', 'PinValidationData', 'PinOffset', ], 'members' => [ 'DecimalizationTable' => [ 'shape' => 'DecimalizationTableType', ], 'PinValidationDataPadCharacter' => [ 'shape' => 'HexLengthEquals1', ], 'PinValidationData' => [ 'shape' => 'PinValidationDataType', ], 'PinOffset' => [ 'shape' => 'PinOffsetType', ], ], ], 'Ibm3624RandomPin' => [ 'type' => 'structure', 'required' => [ 'DecimalizationTable', 'PinValidationDataPadCharacter', 'PinValidationData', ], 'members' => [ 'DecimalizationTable' => [ 'shape' => 'DecimalizationTableType', ], 'PinValidationDataPadCharacter' => [ 'shape' => 'HexLengthEquals1', ], 'PinValidationData' => [ 'shape' => 'PinValidationDataType', ], ], ], 'InitializationVectorType' => [ 'type' => 'string', 'max' => 32, 'min' => 16, 'pattern' => '(?:[0-9a-fA-F]{16}|[0-9a-fA-F]{32})', 'sensitive' => true, ], 'IntegerRangeBetween0And6' => [ 'type' => 'integer', 'box' => true, 'max' => 6, 'min' => 0, ], 'IntegerRangeBetween3And5Type' => [ 'type' => 'integer', 'box' => true, 'max' => 5, 'min' => 3, ], 'IntegerRangeBetween4And12' => [ 'type' => 'integer', 'box' => true, 'max' => 12, 'min' => 4, ], 'IntegerRangeBetween4And16' => [ 'type' => 'integer', 'box' => true, 'max' => 16, 'min' => 4, ], 'InternalServerException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'String', ], ], 'error' => [ 'httpStatusCode' => 500, ], 'exception' => true, 'fault' => true, ], 'KeyArn' => [ 'type' => 'string', 'max' => 150, 'min' => 70, 'pattern' => 'arn:aws:payment-cryptography:[a-z]{2}-[a-z]{1,16}-[0-9]+:[0-9]{12}:key/[0-9a-zA-Z]{16,64}', ], 'KeyArnOrKeyAliasType' => [ 'type' => 'string', 'max' => 322, 'min' => 7, 'pattern' => 'arn:aws:payment-cryptography:[a-z]{2}-[a-z]{1,16}-[0-9]+:[0-9]{12}:(key/[0-9a-zA-Z]{16,64}|alias/[a-zA-Z0-9/_-]+)$|^alias/[a-zA-Z0-9/_-]+', ], 'KeyCheckValue' => [ 'type' => 'string', 'max' => 16, 'min' => 4, 'pattern' => '[0-9a-fA-F]+', ], 'KeyCheckValueAlgorithm' => [ 'type' => 'string', 'enum' => [ 'CMAC', 'ANSI_X9_24', ], ], 'MacAlgorithm' => [ 'type' => 'string', 'enum' => [ 'ISO9797_ALGORITHM1', 'ISO9797_ALGORITHM3', 'CMAC', 'HMAC_SHA224', 'HMAC_SHA256', 'HMAC_SHA384', 'HMAC_SHA512', ], ], 'MacAlgorithmDukpt' => [ 'type' => 'structure', 'required' => [ 'KeySerialNumber', 'DukptKeyVariant', ], 'members' => [ 'KeySerialNumber' => [ 'shape' => 'HexLengthBetween10And24', ], 'DukptKeyVariant' => [ 'shape' => 'DukptKeyVariant', ], 'DukptDerivationType' => [ 'shape' => 'DukptDerivationType', ], ], ], 'MacAlgorithmEmv' => [ 'type' => 'structure', 'required' => [ 'MajorKeyDerivationMode', 'PrimaryAccountNumber', 'PanSequenceNumber', 'SessionKeyDerivationMode', 'SessionKeyDerivationValue', ], 'members' => [ 'MajorKeyDerivationMode' => [ 'shape' => 'MajorKeyDerivationMode', ], 'PrimaryAccountNumber' => [ 'shape' => 'PrimaryAccountNumberType', ], 'PanSequenceNumber' => [ 'shape' => 'NumberLengthEquals2', ], 'SessionKeyDerivationMode' => [ 'shape' => 'SessionKeyDerivationMode', ], 'SessionKeyDerivationValue' => [ 'shape' => 'SessionKeyDerivationValue', ], ], ], 'MacAttributes' => [ 'type' => 'structure', 'members' => [ 'Algorithm' => [ 'shape' => 'MacAlgorithm', ], 'EmvMac' => [ 'shape' => 'MacAlgorithmEmv', ], 'DukptIso9797Algorithm1' => [ 'shape' => 'MacAlgorithmDukpt', ], 'DukptIso9797Algorithm3' => [ 'shape' => 'MacAlgorithmDukpt', ], 'DukptCmac' => [ 'shape' => 'MacAlgorithmDukpt', ], ], 'union' => true, ], 'MacOutputType' => [ 'type' => 'string', 'max' => 128, 'min' => 4, 'pattern' => '[0-9a-fA-F]+', 'sensitive' => true, ], 'MacType' => [ 'type' => 'string', 'max' => 128, 'min' => 4, 'pattern' => '(?:[0-9a-fA-F][0-9a-fA-F])+', 'sensitive' => true, ], 'MajorKeyDerivationMode' => [ 'type' => 'string', 'enum' => [ 'EMV_OPTION_A', 'EMV_OPTION_B', ], ], 'MessageDataType' => [ 'type' => 'string', 'max' => 4096, 'min' => 2, 'pattern' => '(?:[0-9a-fA-F][0-9a-fA-F])+', 'sensitive' => true, ], 'NumberLengthEquals2' => [ 'type' => 'string', 'max' => 2, 'min' => 2, 'pattern' => '[0-9]+', ], 'PaddingType' => [ 'type' => 'string', 'enum' => [ 'PKCS1', 'OAEP_SHA1', 'OAEP_SHA256', 'OAEP_SHA512', ], ], 'PinBlockFormatForPinData' => [ 'type' => 'string', 'enum' => [ 'ISO_FORMAT_0', 'ISO_FORMAT_3', ], ], 'PinData' => [ 'type' => 'structure', 'members' => [ 'PinOffset' => [ 'shape' => 'PinOffsetType', ], 'VerificationValue' => [ 'shape' => 'VerificationValueType', ], ], 'union' => true, ], 'PinGenerationAttributes' => [ 'type' => 'structure', 'members' => [ 'VisaPin' => [ 'shape' => 'VisaPin', ], 'VisaPinVerificationValue' => [ 'shape' => 'VisaPinVerificationValue', ], 'Ibm3624PinOffset' => [ 'shape' => 'Ibm3624PinOffset', ], 'Ibm3624NaturalPin' => [ 'shape' => 'Ibm3624NaturalPin', ], 'Ibm3624RandomPin' => [ 'shape' => 'Ibm3624RandomPin', ], 'Ibm3624PinFromOffset' => [ 'shape' => 'Ibm3624PinFromOffset', ], ], 'union' => true, ], 'PinOffsetType' => [ 'type' => 'string', 'max' => 12, 'min' => 4, 'pattern' => '[0-9]+', 'sensitive' => true, ], 'PinValidationDataType' => [ 'type' => 'string', 'max' => 16, 'min' => 4, 'pattern' => '[0-9]+', 'sensitive' => true, ], 'PinVerificationAttributes' => [ 'type' => 'structure', 'members' => [ 'VisaPin' => [ 'shape' => 'VisaPinVerification', ], 'Ibm3624Pin' => [ 'shape' => 'Ibm3624PinVerification', ], ], 'union' => true, ], 'PlainTextOutputType' => [ 'type' => 'string', 'max' => 4096, 'min' => 16, 'pattern' => '(?:[0-9a-fA-F][0-9a-fA-F])+', 'sensitive' => true, ], 'PlainTextType' => [ 'type' => 'string', 'max' => 4064, 'min' => 16, 'pattern' => '(?:[0-9a-fA-F][0-9a-fA-F])+', 'sensitive' => true, ], 'PrimaryAccountNumberType' => [ 'type' => 'string', 'max' => 19, 'min' => 12, 'pattern' => '[0-9]+', 'sensitive' => true, ], 'ProprietaryAuthenticationDataType' => [ 'type' => 'string', 'max' => 16, 'min' => 1, 'pattern' => '[0-9a-fA-F]+', 'sensitive' => true, ], 'ReEncryptDataInput' => [ 'type' => 'structure', 'required' => [ 'IncomingKeyIdentifier', 'OutgoingKeyIdentifier', 'CipherText', 'IncomingEncryptionAttributes', 'OutgoingEncryptionAttributes', ], 'members' => [ 'IncomingKeyIdentifier' => [ 'shape' => 'KeyArnOrKeyAliasType', 'location' => 'uri', 'locationName' => 'IncomingKeyIdentifier', ], 'OutgoingKeyIdentifier' => [ 'shape' => 'KeyArnOrKeyAliasType', ], 'CipherText' => [ 'shape' => 'CipherTextType', ], 'IncomingEncryptionAttributes' => [ 'shape' => 'ReEncryptionAttributes', ], 'OutgoingEncryptionAttributes' => [ 'shape' => 'ReEncryptionAttributes', ], 'IncomingWrappedKey' => [ 'shape' => 'WrappedKey', ], 'OutgoingWrappedKey' => [ 'shape' => 'WrappedKey', ], ], ], 'ReEncryptDataOutput' => [ 'type' => 'structure', 'required' => [ 'KeyArn', 'KeyCheckValue', 'CipherText', ], 'members' => [ 'KeyArn' => [ 'shape' => 'KeyArn', ], 'KeyCheckValue' => [ 'shape' => 'KeyCheckValue', ], 'CipherText' => [ 'shape' => 'CipherTextType', ], ], ], 'ReEncryptionAttributes' => [ 'type' => 'structure', 'members' => [ 'Symmetric' => [ 'shape' => 'SymmetricEncryptionAttributes', ], 'Dukpt' => [ 'shape' => 'DukptEncryptionAttributes', ], ], 'union' => true, ], 'ResourceNotFoundException' => [ 'type' => 'structure', 'members' => [ 'ResourceId' => [ 'shape' => 'String', ], ], 'error' => [ 'httpStatusCode' => 404, 'senderFault' => true, ], 'exception' => true, ], 'ServiceCodeType' => [ 'type' => 'string', 'max' => 3, 'min' => 3, 'pattern' => '[0-9]+', 'sensitive' => true, ], 'SessionDerivationDataType' => [ 'type' => 'string', 'max' => 16, 'min' => 16, 'pattern' => '[0-9a-fA-F]+', 'sensitive' => true, ], 'SessionKeyAmex' => [ 'type' => 'structure', 'required' => [ 'PrimaryAccountNumber', 'PanSequenceNumber', ], 'members' => [ 'PrimaryAccountNumber' => [ 'shape' => 'PrimaryAccountNumberType', ], 'PanSequenceNumber' => [ 'shape' => 'NumberLengthEquals2', ], ], ], 'SessionKeyDerivation' => [ 'type' => 'structure', 'members' => [ 'EmvCommon' => [ 'shape' => 'SessionKeyEmvCommon', ], 'Mastercard' => [ 'shape' => 'SessionKeyMastercard', ], 'Emv2000' => [ 'shape' => 'SessionKeyEmv2000', ], 'Amex' => [ 'shape' => 'SessionKeyAmex', ], 'Visa' => [ 'shape' => 'SessionKeyVisa', ], ], 'union' => true, ], 'SessionKeyDerivationMode' => [ 'type' => 'string', 'enum' => [ 'EMV_COMMON_SESSION_KEY', 'EMV2000', 'AMEX', 'MASTERCARD_SESSION_KEY', 'VISA', ], ], 'SessionKeyDerivationValue' => [ 'type' => 'structure', 'members' => [ 'ApplicationCryptogram' => [ 'shape' => 'ApplicationCryptogramType', ], 'ApplicationTransactionCounter' => [ 'shape' => 'HexLengthBetween2And4', ], ], 'union' => true, ], 'SessionKeyEmv2000' => [ 'type' => 'structure', 'required' => [ 'PrimaryAccountNumber', 'PanSequenceNumber', 'ApplicationTransactionCounter', ], 'members' => [ 'PrimaryAccountNumber' => [ 'shape' => 'PrimaryAccountNumberType', ], 'PanSequenceNumber' => [ 'shape' => 'NumberLengthEquals2', ], 'ApplicationTransactionCounter' => [ 'shape' => 'HexLengthBetween2And4', ], ], ], 'SessionKeyEmvCommon' => [ 'type' => 'structure', 'required' => [ 'PrimaryAccountNumber', 'PanSequenceNumber', 'ApplicationTransactionCounter', ], 'members' => [ 'PrimaryAccountNumber' => [ 'shape' => 'PrimaryAccountNumberType', ], 'PanSequenceNumber' => [ 'shape' => 'NumberLengthEquals2', ], 'ApplicationTransactionCounter' => [ 'shape' => 'HexLengthBetween2And4', ], ], ], 'SessionKeyMastercard' => [ 'type' => 'structure', 'required' => [ 'PrimaryAccountNumber', 'PanSequenceNumber', 'ApplicationTransactionCounter', 'UnpredictableNumber', ], 'members' => [ 'PrimaryAccountNumber' => [ 'shape' => 'PrimaryAccountNumberType', ], 'PanSequenceNumber' => [ 'shape' => 'NumberLengthEquals2', ], 'ApplicationTransactionCounter' => [ 'shape' => 'HexLengthBetween2And4', ], 'UnpredictableNumber' => [ 'shape' => 'HexLengthBetween2And8', ], ], ], 'SessionKeyVisa' => [ 'type' => 'structure', 'required' => [ 'PrimaryAccountNumber', 'PanSequenceNumber', ], 'members' => [ 'PrimaryAccountNumber' => [ 'shape' => 'PrimaryAccountNumberType', ], 'PanSequenceNumber' => [ 'shape' => 'NumberLengthEquals2', ], ], ], 'String' => [ 'type' => 'string', ], 'SymmetricEncryptionAttributes' => [ 'type' => 'structure', 'required' => [ 'Mode', ], 'members' => [ 'Mode' => [ 'shape' => 'EncryptionMode', ], 'InitializationVector' => [ 'shape' => 'InitializationVectorType', ], 'PaddingType' => [ 'shape' => 'PaddingType', ], ], ], 'ThrottlingException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'String', ], ], 'error' => [ 'httpStatusCode' => 429, 'senderFault' => true, ], 'exception' => true, ], 'Tr31WrappedKeyBlock' => [ 'type' => 'string', 'max' => 9984, 'min' => 56, 'pattern' => '[0-9A-Z]+', 'sensitive' => true, ], 'TrackDataType' => [ 'type' => 'string', 'max' => 160, 'min' => 2, 'pattern' => '[0-9a-fA-F]+', 'sensitive' => true, ], 'TransactionDataType' => [ 'type' => 'string', 'max' => 1024, 'min' => 2, 'pattern' => '[0-9a-fA-F]+', 'sensitive' => true, ], 'TranslatePinDataInput' => [ 'type' => 'structure', 'required' => [ 'IncomingKeyIdentifier', 'OutgoingKeyIdentifier', 'IncomingTranslationAttributes', 'OutgoingTranslationAttributes', 'EncryptedPinBlock', ], 'members' => [ 'IncomingKeyIdentifier' => [ 'shape' => 'KeyArnOrKeyAliasType', ], 'OutgoingKeyIdentifier' => [ 'shape' => 'KeyArnOrKeyAliasType', ], 'IncomingTranslationAttributes' => [ 'shape' => 'TranslationIsoFormats', ], 'OutgoingTranslationAttributes' => [ 'shape' => 'TranslationIsoFormats', ], 'EncryptedPinBlock' => [ 'shape' => 'HexEvenLengthBetween16And32', ], 'IncomingDukptAttributes' => [ 'shape' => 'DukptDerivationAttributes', ], 'OutgoingDukptAttributes' => [ 'shape' => 'DukptDerivationAttributes', ], 'IncomingWrappedKey' => [ 'shape' => 'WrappedKey', ], 'OutgoingWrappedKey' => [ 'shape' => 'WrappedKey', ], ], ], 'TranslatePinDataOutput' => [ 'type' => 'structure', 'required' => [ 'PinBlock', 'KeyArn', 'KeyCheckValue', ], 'members' => [ 'PinBlock' => [ 'shape' => 'EncryptedPinBlockType', ], 'KeyArn' => [ 'shape' => 'KeyArn', ], 'KeyCheckValue' => [ 'shape' => 'KeyCheckValue', ], ], ], 'TranslationIsoFormats' => [ 'type' => 'structure', 'members' => [ 'IsoFormat0' => [ 'shape' => 'TranslationPinDataIsoFormat034', ], 'IsoFormat1' => [ 'shape' => 'TranslationPinDataIsoFormat1', ], 'IsoFormat3' => [ 'shape' => 'TranslationPinDataIsoFormat034', ], 'IsoFormat4' => [ 'shape' => 'TranslationPinDataIsoFormat034', ], ], 'union' => true, ], 'TranslationPinDataIsoFormat034' => [ 'type' => 'structure', 'required' => [ 'PrimaryAccountNumber', ], 'members' => [ 'PrimaryAccountNumber' => [ 'shape' => 'PrimaryAccountNumberType', ], ], ], 'TranslationPinDataIsoFormat1' => [ 'type' => 'structure', 'members' => [], ], 'ValidationDataType' => [ 'type' => 'string', 'max' => 5, 'min' => 3, 'pattern' => '[0-9]+', 'sensitive' => true, ], 'ValidationException' => [ 'type' => 'structure', 'required' => [ 'message', ], 'members' => [ 'message' => [ 'shape' => 'String', ], 'fieldList' => [ 'shape' => 'ValidationExceptionFieldList', ], ], 'exception' => true, ], 'ValidationExceptionField' => [ 'type' => 'structure', 'required' => [ 'path', 'message', ], 'members' => [ 'path' => [ 'shape' => 'String', ], 'message' => [ 'shape' => 'String', ], ], ], 'ValidationExceptionFieldList' => [ 'type' => 'list', 'member' => [ 'shape' => 'ValidationExceptionField', ], ], 'VerificationFailedException' => [ 'type' => 'structure', 'required' => [ 'Reason', 'Message', ], 'members' => [ 'Reason' => [ 'shape' => 'VerificationFailedReason', ], 'Message' => [ 'shape' => 'String', ], ], 'error' => [ 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], 'VerificationFailedReason' => [ 'type' => 'string', 'enum' => [ 'INVALID_MAC', 'INVALID_PIN', 'INVALID_VALIDATION_DATA', 'INVALID_AUTH_REQUEST_CRYPTOGRAM', ], ], 'VerificationValueType' => [ 'type' => 'string', 'max' => 12, 'min' => 4, 'pattern' => '[0-9]+', 'sensitive' => true, ], 'VerifyAuthRequestCryptogramInput' => [ 'type' => 'structure', 'required' => [ 'KeyIdentifier', 'TransactionData', 'AuthRequestCryptogram', 'MajorKeyDerivationMode', 'SessionKeyDerivationAttributes', ], 'members' => [ 'KeyIdentifier' => [ 'shape' => 'KeyArnOrKeyAliasType', ], 'TransactionData' => [ 'shape' => 'TransactionDataType', ], 'AuthRequestCryptogram' => [ 'shape' => 'AuthRequestCryptogramType', ], 'MajorKeyDerivationMode' => [ 'shape' => 'MajorKeyDerivationMode', ], 'SessionKeyDerivationAttributes' => [ 'shape' => 'SessionKeyDerivation', ], 'AuthResponseAttributes' => [ 'shape' => 'CryptogramAuthResponse', ], ], ], 'VerifyAuthRequestCryptogramOutput' => [ 'type' => 'structure', 'required' => [ 'KeyArn', 'KeyCheckValue', ], 'members' => [ 'KeyArn' => [ 'shape' => 'KeyArn', ], 'KeyCheckValue' => [ 'shape' => 'KeyCheckValue', ], 'AuthResponseValue' => [ 'shape' => 'AuthResponseValueType', ], ], ], 'VerifyCardValidationDataInput' => [ 'type' => 'structure', 'required' => [ 'KeyIdentifier', 'PrimaryAccountNumber', 'VerificationAttributes', 'ValidationData', ], 'members' => [ 'KeyIdentifier' => [ 'shape' => 'KeyArnOrKeyAliasType', ], 'PrimaryAccountNumber' => [ 'shape' => 'PrimaryAccountNumberType', ], 'VerificationAttributes' => [ 'shape' => 'CardVerificationAttributes', ], 'ValidationData' => [ 'shape' => 'ValidationDataType', ], ], ], 'VerifyCardValidationDataOutput' => [ 'type' => 'structure', 'required' => [ 'KeyArn', 'KeyCheckValue', ], 'members' => [ 'KeyArn' => [ 'shape' => 'KeyArn', ], 'KeyCheckValue' => [ 'shape' => 'KeyCheckValue', ], ], ], 'VerifyMacInput' => [ 'type' => 'structure', 'required' => [ 'KeyIdentifier', 'MessageData', 'Mac', 'VerificationAttributes', ], 'members' => [ 'KeyIdentifier' => [ 'shape' => 'KeyArnOrKeyAliasType', ], 'MessageData' => [ 'shape' => 'MessageDataType', ], 'Mac' => [ 'shape' => 'MacType', ], 'VerificationAttributes' => [ 'shape' => 'MacAttributes', ], 'MacLength' => [ 'shape' => 'IntegerRangeBetween4And16', ], ], ], 'VerifyMacOutput' => [ 'type' => 'structure', 'required' => [ 'KeyArn', 'KeyCheckValue', ], 'members' => [ 'KeyArn' => [ 'shape' => 'KeyArn', ], 'KeyCheckValue' => [ 'shape' => 'KeyCheckValue', ], ], ], 'VerifyPinDataInput' => [ 'type' => 'structure', 'required' => [ 'VerificationKeyIdentifier', 'EncryptionKeyIdentifier', 'VerificationAttributes', 'EncryptedPinBlock', 'PrimaryAccountNumber', 'PinBlockFormat', ], 'members' => [ 'VerificationKeyIdentifier' => [ 'shape' => 'KeyArnOrKeyAliasType', ], 'EncryptionKeyIdentifier' => [ 'shape' => 'KeyArnOrKeyAliasType', ], 'VerificationAttributes' => [ 'shape' => 'PinVerificationAttributes', ], 'EncryptedPinBlock' => [ 'shape' => 'EncryptedPinBlockType', ], 'PrimaryAccountNumber' => [ 'shape' => 'PrimaryAccountNumberType', ], 'PinBlockFormat' => [ 'shape' => 'PinBlockFormatForPinData', ], 'PinDataLength' => [ 'shape' => 'IntegerRangeBetween4And12', ], 'DukptAttributes' => [ 'shape' => 'DukptAttributes', ], ], ], 'VerifyPinDataOutput' => [ 'type' => 'structure', 'required' => [ 'VerificationKeyArn', 'VerificationKeyCheckValue', 'EncryptionKeyArn', 'EncryptionKeyCheckValue', ], 'members' => [ 'VerificationKeyArn' => [ 'shape' => 'KeyArn', ], 'VerificationKeyCheckValue' => [ 'shape' => 'KeyCheckValue', ], 'EncryptionKeyArn' => [ 'shape' => 'KeyArn', ], 'EncryptionKeyCheckValue' => [ 'shape' => 'KeyCheckValue', ], ], ], 'VisaPin' => [ 'type' => 'structure', 'required' => [ 'PinVerificationKeyIndex', ], 'members' => [ 'PinVerificationKeyIndex' => [ 'shape' => 'IntegerRangeBetween0And6', ], ], ], 'VisaPinVerification' => [ 'type' => 'structure', 'required' => [ 'PinVerificationKeyIndex', 'VerificationValue', ], 'members' => [ 'PinVerificationKeyIndex' => [ 'shape' => 'IntegerRangeBetween0And6', ], 'VerificationValue' => [ 'shape' => 'VerificationValueType', ], ], ], 'VisaPinVerificationValue' => [ 'type' => 'structure', 'required' => [ 'EncryptedPinBlock', 'PinVerificationKeyIndex', ], 'members' => [ 'EncryptedPinBlock' => [ 'shape' => 'EncryptedPinBlockType', ], 'PinVerificationKeyIndex' => [ 'shape' => 'IntegerRangeBetween0And6', ], ], ], 'WrappedKey' => [ 'type' => 'structure', 'required' => [ 'WrappedKeyMaterial', ], 'members' => [ 'WrappedKeyMaterial' => [ 'shape' => 'WrappedKeyMaterial', ], 'KeyCheckValueAlgorithm' => [ 'shape' => 'KeyCheckValueAlgorithm', ], ], ], 'WrappedKeyMaterial' => [ 'type' => 'structure', 'members' => [ 'Tr31KeyBlock' => [ 'shape' => 'Tr31WrappedKeyBlock', ], ], 'union' => true, ], ],];
