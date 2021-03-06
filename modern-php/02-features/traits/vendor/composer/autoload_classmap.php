<?php

// autoload_classmap.php @generated by Composer

$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname($vendorDir);

return array(
    'ComposerAutoloaderInit5c7c686eb894da6cb8ef4a00ed105b18' => $vendorDir . '/composer/autoload_real.php',
    'Composer\\Autoload\\ClassLoader' => $vendorDir . '/composer/ClassLoader.php',
    'Composer\\Autoload\\ComposerStaticInit5c7c686eb894da6cb8ef4a00ed105b18' => $vendorDir . '/composer/autoload_static.php',
    'Geocodable' => $baseDir . '/Geocodable.php',
    'Geocoder\\Adapter\\GeoIP2Adapter' => $vendorDir . '/willdurand/geocoder/src/Geocoder/Adapter/GeoIP2Adapter.php',
    'Geocoder\\Dumper\\Dumper' => $vendorDir . '/willdurand/geocoder/src/Geocoder/Dumper/Dumper.php',
    'Geocoder\\Dumper\\GeoJson' => $vendorDir . '/willdurand/geocoder/src/Geocoder/Dumper/GeoJson.php',
    'Geocoder\\Dumper\\Gpx' => $vendorDir . '/willdurand/geocoder/src/Geocoder/Dumper/Gpx.php',
    'Geocoder\\Dumper\\Kml' => $vendorDir . '/willdurand/geocoder/src/Geocoder/Dumper/Kml.php',
    'Geocoder\\Dumper\\Wkb' => $vendorDir . '/willdurand/geocoder/src/Geocoder/Dumper/Wkb.php',
    'Geocoder\\Dumper\\Wkt' => $vendorDir . '/willdurand/geocoder/src/Geocoder/Dumper/Wkt.php',
    'Geocoder\\Exception\\ChainNoResult' => $vendorDir . '/willdurand/geocoder/src/Geocoder/Exception/ChainNoResult.php',
    'Geocoder\\Exception\\CollectionIsEmpty' => $vendorDir . '/willdurand/geocoder/src/Geocoder/Exception/CollectionIsEmpty.php',
    'Geocoder\\Exception\\Exception' => $vendorDir . '/willdurand/geocoder/src/Geocoder/Exception/Exception.php',
    'Geocoder\\Exception\\ExtensionNotLoaded' => $vendorDir . '/willdurand/geocoder/src/Geocoder/Exception/ExtensionNotLoaded.php',
    'Geocoder\\Exception\\FunctionNotFound' => $vendorDir . '/willdurand/geocoder/src/Geocoder/Exception/FunctionNotFound.php',
    'Geocoder\\Exception\\HttpError' => $vendorDir . '/willdurand/geocoder/src/Geocoder/Exception/HttpError.php',
    'Geocoder\\Exception\\InvalidArgument' => $vendorDir . '/willdurand/geocoder/src/Geocoder/Exception/InvalidArgument.php',
    'Geocoder\\Exception\\InvalidCredentials' => $vendorDir . '/willdurand/geocoder/src/Geocoder/Exception/InvalidCredentials.php',
    'Geocoder\\Exception\\NoResult' => $vendorDir . '/willdurand/geocoder/src/Geocoder/Exception/NoResult.php',
    'Geocoder\\Exception\\ProviderNotRegistered' => $vendorDir . '/willdurand/geocoder/src/Geocoder/Exception/ProviderNotRegistered.php',
    'Geocoder\\Exception\\QuotaExceeded' => $vendorDir . '/willdurand/geocoder/src/Geocoder/Exception/QuotaExceeded.php',
    'Geocoder\\Exception\\UnexpectedValue' => $vendorDir . '/willdurand/geocoder/src/Geocoder/Exception/UnexpectedValue.php',
    'Geocoder\\Exception\\UnsupportedOperation' => $vendorDir . '/willdurand/geocoder/src/Geocoder/Exception/UnsupportedOperation.php',
    'Geocoder\\Formatter\\StringFormatter' => $vendorDir . '/willdurand/geocoder/src/Geocoder/Formatter/StringFormatter.php',
    'Geocoder\\Geocoder' => $vendorDir . '/willdurand/geocoder/src/Geocoder/Geocoder.php',
    'Geocoder\\Model\\Address' => $vendorDir . '/willdurand/geocoder/src/Geocoder/Model/Address.php',
    'Geocoder\\Model\\AddressCollection' => $vendorDir . '/willdurand/geocoder/src/Geocoder/Model/AddressCollection.php',
    'Geocoder\\Model\\AddressFactory' => $vendorDir . '/willdurand/geocoder/src/Geocoder/Model/AddressFactory.php',
    'Geocoder\\Model\\AdminLevel' => $vendorDir . '/willdurand/geocoder/src/Geocoder/Model/AdminLevel.php',
    'Geocoder\\Model\\AdminLevelCollection' => $vendorDir . '/willdurand/geocoder/src/Geocoder/Model/AdminLevelCollection.php',
    'Geocoder\\Model\\Bounds' => $vendorDir . '/willdurand/geocoder/src/Geocoder/Model/Bounds.php',
    'Geocoder\\Model\\Coordinates' => $vendorDir . '/willdurand/geocoder/src/Geocoder/Model/Coordinates.php',
    'Geocoder\\Model\\Country' => $vendorDir . '/willdurand/geocoder/src/Geocoder/Model/Country.php',
    'Geocoder\\ProviderAggregator' => $vendorDir . '/willdurand/geocoder/src/Geocoder/ProviderAggregator.php',
    'Geocoder\\Provider\\AbstractHttpProvider' => $vendorDir . '/willdurand/geocoder/src/Geocoder/Provider/AbstractHttpProvider.php',
    'Geocoder\\Provider\\AbstractProvider' => $vendorDir . '/willdurand/geocoder/src/Geocoder/Provider/AbstractProvider.php',
    'Geocoder\\Provider\\ArcGISOnline' => $vendorDir . '/willdurand/geocoder/src/Geocoder/Provider/ArcGISOnline.php',
    'Geocoder\\Provider\\BingMaps' => $vendorDir . '/willdurand/geocoder/src/Geocoder/Provider/BingMaps.php',
    'Geocoder\\Provider\\Chain' => $vendorDir . '/willdurand/geocoder/src/Geocoder/Provider/Chain.php',
    'Geocoder\\Provider\\FreeGeoIp' => $vendorDir . '/willdurand/geocoder/src/Geocoder/Provider/FreeGeoIp.php',
    'Geocoder\\Provider\\GeoIP2' => $vendorDir . '/willdurand/geocoder/src/Geocoder/Provider/GeoIP2.php',
    'Geocoder\\Provider\\GeoIPs' => $vendorDir . '/willdurand/geocoder/src/Geocoder/Provider/GeoIPs.php',
    'Geocoder\\Provider\\GeoPlugin' => $vendorDir . '/willdurand/geocoder/src/Geocoder/Provider/GeoPlugin.php',
    'Geocoder\\Provider\\Geoip' => $vendorDir . '/willdurand/geocoder/src/Geocoder/Provider/Geoip.php',
    'Geocoder\\Provider\\Geonames' => $vendorDir . '/willdurand/geocoder/src/Geocoder/Provider/Geonames.php',
    'Geocoder\\Provider\\GoogleMaps' => $vendorDir . '/willdurand/geocoder/src/Geocoder/Provider/GoogleMaps.php',
    'Geocoder\\Provider\\GoogleMapsBusiness' => $vendorDir . '/willdurand/geocoder/src/Geocoder/Provider/GoogleMapsBusiness.php',
    'Geocoder\\Provider\\HostIp' => $vendorDir . '/willdurand/geocoder/src/Geocoder/Provider/HostIp.php',
    'Geocoder\\Provider\\IpInfoDb' => $vendorDir . '/willdurand/geocoder/src/Geocoder/Provider/IpInfoDb.php',
    'Geocoder\\Provider\\LocaleAwareProvider' => $vendorDir . '/willdurand/geocoder/src/Geocoder/Provider/LocaleAwareProvider.php',
    'Geocoder\\Provider\\LocaleTrait' => $vendorDir . '/willdurand/geocoder/src/Geocoder/Provider/LocaleTrait.php',
    'Geocoder\\Provider\\MapQuest' => $vendorDir . '/willdurand/geocoder/src/Geocoder/Provider/MapQuest.php',
    'Geocoder\\Provider\\MaxMind' => $vendorDir . '/willdurand/geocoder/src/Geocoder/Provider/MaxMind.php',
    'Geocoder\\Provider\\MaxMindBinary' => $vendorDir . '/willdurand/geocoder/src/Geocoder/Provider/MaxMindBinary.php',
    'Geocoder\\Provider\\Nominatim' => $vendorDir . '/willdurand/geocoder/src/Geocoder/Provider/Nominatim.php',
    'Geocoder\\Provider\\OpenCage' => $vendorDir . '/willdurand/geocoder/src/Geocoder/Provider/OpenCage.php',
    'Geocoder\\Provider\\OpenStreetMap' => $vendorDir . '/willdurand/geocoder/src/Geocoder/Provider/OpenStreetMap.php',
    'Geocoder\\Provider\\Provider' => $vendorDir . '/willdurand/geocoder/src/Geocoder/Provider/Provider.php',
    'Geocoder\\Provider\\TomTom' => $vendorDir . '/willdurand/geocoder/src/Geocoder/Provider/TomTom.php',
    'Geocoder\\Provider\\Yandex' => $vendorDir . '/willdurand/geocoder/src/Geocoder/Provider/Yandex.php',
    'Geocoder\\Tests\\Adapter\\GeoIP2AdapterTest' => $vendorDir . '/willdurand/geocoder/tests/Geocoder/Tests/Adapter/GeoIP2AdapterTest.php',
    'Geocoder\\Tests\\CachedResponseAdapter' => $vendorDir . '/willdurand/geocoder/tests/Geocoder/Tests/CachedResponseAdapter.php',
    'Geocoder\\Tests\\Dumper\\GeoJsonTest' => $vendorDir . '/willdurand/geocoder/tests/Geocoder/Tests/Dumper/GeoJsonTest.php',
    'Geocoder\\Tests\\Dumper\\GpxTest' => $vendorDir . '/willdurand/geocoder/tests/Geocoder/Tests/Dumper/GpxTest.php',
    'Geocoder\\Tests\\Dumper\\KmlTest' => $vendorDir . '/willdurand/geocoder/tests/Geocoder/Tests/Dumper/KmlTest.php',
    'Geocoder\\Tests\\Dumper\\WkbTest' => $vendorDir . '/willdurand/geocoder/tests/Geocoder/Tests/Dumper/WkbTest.php',
    'Geocoder\\Tests\\Dumper\\WktTest' => $vendorDir . '/willdurand/geocoder/tests/Geocoder/Tests/Dumper/WktTest.php',
    'Geocoder\\Tests\\Formatter\\StringFormatterTest' => $vendorDir . '/willdurand/geocoder/tests/Geocoder/Tests/Formatter/StringFormatterTest.php',
    'Geocoder\\Tests\\MockLocaleAwareProvider' => $vendorDir . '/willdurand/geocoder/tests/Geocoder/Tests/ProviderAggregatorTest.php',
    'Geocoder\\Tests\\MockProvider' => $vendorDir . '/willdurand/geocoder/tests/Geocoder/Tests/ProviderAggregatorTest.php',
    'Geocoder\\Tests\\MockProviderWithData' => $vendorDir . '/willdurand/geocoder/tests/Geocoder/Tests/ProviderAggregatorTest.php',
    'Geocoder\\Tests\\MockProviderWithRequestCount' => $vendorDir . '/willdurand/geocoder/tests/Geocoder/Tests/ProviderAggregatorTest.php',
    'Geocoder\\Tests\\Model\\AddressFactoryTest' => $vendorDir . '/willdurand/geocoder/tests/Geocoder/Tests/Model/AddressFactoryTest.php',
    'Geocoder\\Tests\\ProviderAggregatorTest' => $vendorDir . '/willdurand/geocoder/tests/Geocoder/Tests/ProviderAggregatorTest.php',
    'Geocoder\\Tests\\Provider\\AbstractProviderTest' => $vendorDir . '/willdurand/geocoder/tests/Geocoder/Tests/Provider/AbstractProviderTest.php',
    'Geocoder\\Tests\\Provider\\ArcGISOnlineTest' => $vendorDir . '/willdurand/geocoder/tests/Geocoder/Tests/Provider/ArcGISOnlineTest.php',
    'Geocoder\\Tests\\Provider\\BingMapsTest' => $vendorDir . '/willdurand/geocoder/tests/Geocoder/Tests/Provider/BingMapsTest.php',
    'Geocoder\\Tests\\Provider\\ChainTest' => $vendorDir . '/willdurand/geocoder/tests/Geocoder/Tests/Provider/ChainTest.php',
    'Geocoder\\Tests\\Provider\\FreeGeoIpTest' => $vendorDir . '/willdurand/geocoder/tests/Geocoder/Tests/Provider/FreeGeoIpTest.php',
    'Geocoder\\Tests\\Provider\\GeoIP2Test' => $vendorDir . '/willdurand/geocoder/tests/Geocoder/Tests/Provider/GeoIP2Test.php',
    'Geocoder\\Tests\\Provider\\GeoIPsTest' => $vendorDir . '/willdurand/geocoder/tests/Geocoder/Tests/Provider/GeoIPsTest.php',
    'Geocoder\\Tests\\Provider\\GeoPluginTest' => $vendorDir . '/willdurand/geocoder/tests/Geocoder/Tests/Provider/GeoPluginTest.php',
    'Geocoder\\Tests\\Provider\\GeoipTest' => $vendorDir . '/willdurand/geocoder/tests/Geocoder/Tests/Provider/GeoipTest.php',
    'Geocoder\\Tests\\Provider\\GeonamesTest' => $vendorDir . '/willdurand/geocoder/tests/Geocoder/Tests/Provider/GeonamesTest.php',
    'Geocoder\\Tests\\Provider\\GoogleMapsBusinessTest' => $vendorDir . '/willdurand/geocoder/tests/Geocoder/Tests/Provider/GoogleMapsBusinessTest.php',
    'Geocoder\\Tests\\Provider\\GoogleMapsTest' => $vendorDir . '/willdurand/geocoder/tests/Geocoder/Tests/Provider/GoogleMapsTest.php',
    'Geocoder\\Tests\\Provider\\HostIpTest' => $vendorDir . '/willdurand/geocoder/tests/Geocoder/Tests/Provider/HostIpTest.php',
    'Geocoder\\Tests\\Provider\\IpInfoDbTest' => $vendorDir . '/willdurand/geocoder/tests/Geocoder/Tests/Provider/IpInfoDbTest.php',
    'Geocoder\\Tests\\Provider\\MapQuestTest' => $vendorDir . '/willdurand/geocoder/tests/Geocoder/Tests/Provider/MapQuestTest.php',
    'Geocoder\\Tests\\Provider\\MaxMindBinaryTest' => $vendorDir . '/willdurand/geocoder/tests/Geocoder/Tests/Provider/MaxMindBinaryTest.php',
    'Geocoder\\Tests\\Provider\\MaxMindTest' => $vendorDir . '/willdurand/geocoder/tests/Geocoder/Tests/Provider/MaxMindTest.php',
    'Geocoder\\Tests\\Provider\\MockHttpAdapter' => $vendorDir . '/willdurand/geocoder/tests/Geocoder/Tests/Provider/AbstractProviderTest.php',
    'Geocoder\\Tests\\Provider\\MockProvider' => $vendorDir . '/willdurand/geocoder/tests/Geocoder/Tests/Provider/AbstractProviderTest.php',
    'Geocoder\\Tests\\Provider\\OpenCageMock' => $vendorDir . '/willdurand/geocoder/tests/Geocoder/Tests/Provider/OpenCageTest.php',
    'Geocoder\\Tests\\Provider\\OpenCageTest' => $vendorDir . '/willdurand/geocoder/tests/Geocoder/Tests/Provider/OpenCageTest.php',
    'Geocoder\\Tests\\Provider\\OpenStreetMapTest' => $vendorDir . '/willdurand/geocoder/tests/Geocoder/Tests/Provider/OpenStreetMapTest.php',
    'Geocoder\\Tests\\Provider\\TomTomTest' => $vendorDir . '/willdurand/geocoder/tests/Geocoder/Tests/Provider/TomTomTest.php',
    'Geocoder\\Tests\\Provider\\YandexTest' => $vendorDir . '/willdurand/geocoder/tests/Geocoder/Tests/Provider/YandexTest.php',
    'Geocoder\\Tests\\TestCase' => $vendorDir . '/willdurand/geocoder/tests/Geocoder/Tests/TestCase.php',
    'Geocoder\\Tests\\TestableGeocoder' => $vendorDir . '/willdurand/geocoder/tests/Geocoder/Tests/ProviderAggregatorTest.php',
    'Geocoder\\Tests\\TimedGeocoderTest' => $vendorDir . '/willdurand/geocoder/tests/Geocoder/Tests/TimedGeocoderTest.php',
    'Geocoder\\TimedGeocoder' => $vendorDir . '/willdurand/geocoder/src/Geocoder/TimedGeocoder.php',
    'Ivory\\HttpAdapter\\AbstractCurlHttpAdapter' => $vendorDir . '/egeloen/http-adapter/src/AbstractCurlHttpAdapter.php',
    'Ivory\\HttpAdapter\\AbstractHttpAdapter' => $vendorDir . '/egeloen/http-adapter/src/AbstractHttpAdapter.php',
    'Ivory\\HttpAdapter\\AbstractStreamHttpAdapter' => $vendorDir . '/egeloen/http-adapter/src/AbstractStreamHttpAdapter.php',
    'Ivory\\HttpAdapter\\Asset\\AbstractUninstantiableAsset' => $vendorDir . '/egeloen/http-adapter/src/Asset/AbstractUninstantiableAsset.php',
    'Ivory\\HttpAdapter\\BuzzHttpAdapter' => $vendorDir . '/egeloen/http-adapter/src/BuzzHttpAdapter.php',
    'Ivory\\HttpAdapter\\CakeHttpAdapter' => $vendorDir . '/egeloen/http-adapter/src/CakeHttpAdapter.php',
    'Ivory\\HttpAdapter\\Configuration' => $vendorDir . '/egeloen/http-adapter/src/Configuration.php',
    'Ivory\\HttpAdapter\\ConfigurationInterface' => $vendorDir . '/egeloen/http-adapter/src/ConfigurationInterface.php',
    'Ivory\\HttpAdapter\\CurlHttpAdapter' => $vendorDir . '/egeloen/http-adapter/src/CurlHttpAdapter.php',
    'Ivory\\HttpAdapter\\EventDispatcherHttpAdapter' => $vendorDir . '/egeloen/http-adapter/src/EventDispatcherHttpAdapter.php',
    'Ivory\\HttpAdapter\\Event\\AbstractEvent' => $vendorDir . '/egeloen/http-adapter/src/Event/AbstractEvent.php',
    'Ivory\\HttpAdapter\\Event\\BasicAuth\\BasicAuth' => $vendorDir . '/egeloen/http-adapter/src/Event/BasicAuth/BasicAuth.php',
    'Ivory\\HttpAdapter\\Event\\BasicAuth\\BasicAuthInterface' => $vendorDir . '/egeloen/http-adapter/src/Event/BasicAuth/BasicAuthInterface.php',
    'Ivory\\HttpAdapter\\Event\\Cookie\\Cookie' => $vendorDir . '/egeloen/http-adapter/src/Event/Cookie/Cookie.php',
    'Ivory\\HttpAdapter\\Event\\Cookie\\CookieFactory' => $vendorDir . '/egeloen/http-adapter/src/Event/Cookie/CookieFactory.php',
    'Ivory\\HttpAdapter\\Event\\Cookie\\CookieFactoryInterface' => $vendorDir . '/egeloen/http-adapter/src/Event/Cookie/CookieFactoryInterface.php',
    'Ivory\\HttpAdapter\\Event\\Cookie\\CookieInterface' => $vendorDir . '/egeloen/http-adapter/src/Event/Cookie/CookieInterface.php',
    'Ivory\\HttpAdapter\\Event\\Cookie\\Jar\\AbstractPersistentCookieJar' => $vendorDir . '/egeloen/http-adapter/src/Event/Cookie/Jar/AbstractPersistentCookieJar.php',
    'Ivory\\HttpAdapter\\Event\\Cookie\\Jar\\CookieJar' => $vendorDir . '/egeloen/http-adapter/src/Event/Cookie/Jar/CookieJar.php',
    'Ivory\\HttpAdapter\\Event\\Cookie\\Jar\\CookieJarInterface' => $vendorDir . '/egeloen/http-adapter/src/Event/Cookie/Jar/CookieJarInterface.php',
    'Ivory\\HttpAdapter\\Event\\Cookie\\Jar\\FileCookieJar' => $vendorDir . '/egeloen/http-adapter/src/Event/Cookie/Jar/FileCookieJar.php',
    'Ivory\\HttpAdapter\\Event\\Cookie\\Jar\\PersistentCookieJarInterface' => $vendorDir . '/egeloen/http-adapter/src/Event/Cookie/Jar/PersistentCookieJarInterface.php',
    'Ivory\\HttpAdapter\\Event\\Cookie\\Jar\\SessionCookieJar' => $vendorDir . '/egeloen/http-adapter/src/Event/Cookie/Jar/SessionCookieJar.php',
    'Ivory\\HttpAdapter\\Event\\Events' => $vendorDir . '/egeloen/http-adapter/src/Event/Events.php',
    'Ivory\\HttpAdapter\\Event\\Formatter\\Formatter' => $vendorDir . '/egeloen/http-adapter/src/Event/Formatter/Formatter.php',
    'Ivory\\HttpAdapter\\Event\\Formatter\\FormatterInterface' => $vendorDir . '/egeloen/http-adapter/src/Event/Formatter/FormatterInterface.php',
    'Ivory\\HttpAdapter\\Event\\History\\Journal' => $vendorDir . '/egeloen/http-adapter/src/Event/History/Journal.php',
    'Ivory\\HttpAdapter\\Event\\History\\JournalEntry' => $vendorDir . '/egeloen/http-adapter/src/Event/History/JournalEntry.php',
    'Ivory\\HttpAdapter\\Event\\History\\JournalEntryFactory' => $vendorDir . '/egeloen/http-adapter/src/Event/History/JournalEntryFactory.php',
    'Ivory\\HttpAdapter\\Event\\History\\JournalEntryFactoryInterface' => $vendorDir . '/egeloen/http-adapter/src/Event/History/JournalEntryFactoryInterface.php',
    'Ivory\\HttpAdapter\\Event\\History\\JournalEntryInterface' => $vendorDir . '/egeloen/http-adapter/src/Event/History/JournalEntryInterface.php',
    'Ivory\\HttpAdapter\\Event\\History\\JournalInterface' => $vendorDir . '/egeloen/http-adapter/src/Event/History/JournalInterface.php',
    'Ivory\\HttpAdapter\\Event\\MultiRequestCreatedEvent' => $vendorDir . '/egeloen/http-adapter/src/Event/MultiRequestCreatedEvent.php',
    'Ivory\\HttpAdapter\\Event\\MultiRequestErroredEvent' => $vendorDir . '/egeloen/http-adapter/src/Event/MultiRequestErroredEvent.php',
    'Ivory\\HttpAdapter\\Event\\MultiRequestSentEvent' => $vendorDir . '/egeloen/http-adapter/src/Event/MultiRequestSentEvent.php',
    'Ivory\\HttpAdapter\\Event\\Redirect\\Redirect' => $vendorDir . '/egeloen/http-adapter/src/Event/Redirect/Redirect.php',
    'Ivory\\HttpAdapter\\Event\\Redirect\\RedirectInterface' => $vendorDir . '/egeloen/http-adapter/src/Event/Redirect/RedirectInterface.php',
    'Ivory\\HttpAdapter\\Event\\RequestCreatedEvent' => $vendorDir . '/egeloen/http-adapter/src/Event/RequestCreatedEvent.php',
    'Ivory\\HttpAdapter\\Event\\RequestErroredEvent' => $vendorDir . '/egeloen/http-adapter/src/Event/RequestErroredEvent.php',
    'Ivory\\HttpAdapter\\Event\\RequestSentEvent' => $vendorDir . '/egeloen/http-adapter/src/Event/RequestSentEvent.php',
    'Ivory\\HttpAdapter\\Event\\Retry\\Retry' => $vendorDir . '/egeloen/http-adapter/src/Event/Retry/Retry.php',
    'Ivory\\HttpAdapter\\Event\\Retry\\RetryInterface' => $vendorDir . '/egeloen/http-adapter/src/Event/Retry/RetryInterface.php',
    'Ivory\\HttpAdapter\\Event\\Retry\\Strategy\\AbstractDelayedRetryStrategy' => $vendorDir . '/egeloen/http-adapter/src/Event/Retry/Strategy/AbstractDelayedRetryStrategy.php',
    'Ivory\\HttpAdapter\\Event\\Retry\\Strategy\\AbstractRetryStrategyChain' => $vendorDir . '/egeloen/http-adapter/src/Event/Retry/Strategy/AbstractRetryStrategyChain.php',
    'Ivory\\HttpAdapter\\Event\\Retry\\Strategy\\CallbackRetryStrategy' => $vendorDir . '/egeloen/http-adapter/src/Event/Retry/Strategy/CallbackRetryStrategy.php',
    'Ivory\\HttpAdapter\\Event\\Retry\\Strategy\\ConstantDelayedRetryStrategy' => $vendorDir . '/egeloen/http-adapter/src/Event/Retry/Strategy/ConstantDelayedRetryStrategy.php',
    'Ivory\\HttpAdapter\\Event\\Retry\\Strategy\\ExponentialDelayedRetryStrategy' => $vendorDir . '/egeloen/http-adapter/src/Event/Retry/Strategy/ExponentialDelayedRetryStrategy.php',
    'Ivory\\HttpAdapter\\Event\\Retry\\Strategy\\LimitedRetryStrategy' => $vendorDir . '/egeloen/http-adapter/src/Event/Retry/Strategy/LimitedRetryStrategy.php',
    'Ivory\\HttpAdapter\\Event\\Retry\\Strategy\\LinearDelayedRetryStrategy' => $vendorDir . '/egeloen/http-adapter/src/Event/Retry/Strategy/LinearDelayedRetryStrategy.php',
    'Ivory\\HttpAdapter\\Event\\Retry\\Strategy\\RetryStrategyChainInterface' => $vendorDir . '/egeloen/http-adapter/src/Event/Retry/Strategy/RetryStrategyChainInterface.php',
    'Ivory\\HttpAdapter\\Event\\Retry\\Strategy\\RetryStrategyInterface' => $vendorDir . '/egeloen/http-adapter/src/Event/Retry/Strategy/RetryStrategyInterface.php',
    'Ivory\\HttpAdapter\\Event\\StatusCode\\StatusCode' => $vendorDir . '/egeloen/http-adapter/src/Event/StatusCode/StatusCode.php',
    'Ivory\\HttpAdapter\\Event\\StatusCode\\StatusCodeInterface' => $vendorDir . '/egeloen/http-adapter/src/Event/StatusCode/StatusCodeInterface.php',
    'Ivory\\HttpAdapter\\Event\\Subscriber\\AbstractFormatterSubscriber' => $vendorDir . '/egeloen/http-adapter/src/Event/Subscriber/AbstractFormatterSubscriber.php',
    'Ivory\\HttpAdapter\\Event\\Subscriber\\AbstractTimerSubscriber' => $vendorDir . '/egeloen/http-adapter/src/Event/Subscriber/AbstractTimerSubscriber.php',
    'Ivory\\HttpAdapter\\Event\\Subscriber\\BasicAuthSubscriber' => $vendorDir . '/egeloen/http-adapter/src/Event/Subscriber/BasicAuthSubscriber.php',
    'Ivory\\HttpAdapter\\Event\\Subscriber\\CookieSubscriber' => $vendorDir . '/egeloen/http-adapter/src/Event/Subscriber/CookieSubscriber.php',
    'Ivory\\HttpAdapter\\Event\\Subscriber\\HistorySubscriber' => $vendorDir . '/egeloen/http-adapter/src/Event/Subscriber/HistorySubscriber.php',
    'Ivory\\HttpAdapter\\Event\\Subscriber\\LoggerSubscriber' => $vendorDir . '/egeloen/http-adapter/src/Event/Subscriber/LoggerSubscriber.php',
    'Ivory\\HttpAdapter\\Event\\Subscriber\\RedirectSubscriber' => $vendorDir . '/egeloen/http-adapter/src/Event/Subscriber/RedirectSubscriber.php',
    'Ivory\\HttpAdapter\\Event\\Subscriber\\RetrySubscriber' => $vendorDir . '/egeloen/http-adapter/src/Event/Subscriber/RetrySubscriber.php',
    'Ivory\\HttpAdapter\\Event\\Subscriber\\StatusCodeSubscriber' => $vendorDir . '/egeloen/http-adapter/src/Event/Subscriber/StatusCodeSubscriber.php',
    'Ivory\\HttpAdapter\\Event\\Subscriber\\StopwatchSubscriber' => $vendorDir . '/egeloen/http-adapter/src/Event/Subscriber/StopwatchSubscriber.php',
    'Ivory\\HttpAdapter\\Event\\Timer\\Timer' => $vendorDir . '/egeloen/http-adapter/src/Event/Timer/Timer.php',
    'Ivory\\HttpAdapter\\Event\\Timer\\TimerInterface' => $vendorDir . '/egeloen/http-adapter/src/Event/Timer/TimerInterface.php',
    'Ivory\\HttpAdapter\\Extractor\\ProtocolVersionExtractor' => $vendorDir . '/egeloen/http-adapter/src/Extractor/ProtocolVersionExtractor.php',
    'Ivory\\HttpAdapter\\Extractor\\StatusCodeExtractor' => $vendorDir . '/egeloen/http-adapter/src/Extractor/StatusCodeExtractor.php',
    'Ivory\\HttpAdapter\\Extractor\\StatusLineExtractor' => $vendorDir . '/egeloen/http-adapter/src/Extractor/StatusLineExtractor.php',
    'Ivory\\HttpAdapter\\FileGetContentsHttpAdapter' => $vendorDir . '/egeloen/http-adapter/src/FileGetContentsHttpAdapter.php',
    'Ivory\\HttpAdapter\\FopenHttpAdapter' => $vendorDir . '/egeloen/http-adapter/src/FopenHttpAdapter.php',
    'Ivory\\HttpAdapter\\Guzzle3HttpAdapter' => $vendorDir . '/egeloen/http-adapter/src/Guzzle3HttpAdapter.php',
    'Ivory\\HttpAdapter\\Guzzle4HttpAdapter' => $vendorDir . '/egeloen/http-adapter/src/Guzzle4HttpAdapter.php',
    'Ivory\\HttpAdapter\\Guzzle5HttpAdapter' => $vendorDir . '/egeloen/http-adapter/src/Guzzle5HttpAdapter.php',
    'Ivory\\HttpAdapter\\Guzzle6HttpAdapter' => $vendorDir . '/egeloen/http-adapter/src/Guzzle6HttpAdapter.php',
    'Ivory\\HttpAdapter\\HttpAdapterException' => $vendorDir . '/egeloen/http-adapter/src/HttpAdapterException.php',
    'Ivory\\HttpAdapter\\HttpAdapterFactory' => $vendorDir . '/egeloen/http-adapter/src/HttpAdapterFactory.php',
    'Ivory\\HttpAdapter\\HttpAdapterInterface' => $vendorDir . '/egeloen/http-adapter/src/HttpAdapterInterface.php',
    'Ivory\\HttpAdapter\\HttpAdapterTrait' => $vendorDir . '/egeloen/http-adapter/src/HttpAdapterTrait.php',
    'Ivory\\HttpAdapter\\HttpfulHttpAdapter' => $vendorDir . '/egeloen/http-adapter/src/HttpfulHttpAdapter.php',
    'Ivory\\HttpAdapter\\Message\\InternalRequest' => $vendorDir . '/egeloen/http-adapter/src/Message/InternalRequest.php',
    'Ivory\\HttpAdapter\\Message\\InternalRequestInterface' => $vendorDir . '/egeloen/http-adapter/src/Message/InternalRequestInterface.php',
    'Ivory\\HttpAdapter\\Message\\MessageFactory' => $vendorDir . '/egeloen/http-adapter/src/Message/MessageFactory.php',
    'Ivory\\HttpAdapter\\Message\\MessageFactoryInterface' => $vendorDir . '/egeloen/http-adapter/src/Message/MessageFactoryInterface.php',
    'Ivory\\HttpAdapter\\Message\\MessageInterface' => $vendorDir . '/egeloen/http-adapter/src/Message/MessageInterface.php',
    'Ivory\\HttpAdapter\\Message\\MessageTrait' => $vendorDir . '/egeloen/http-adapter/src/Message/MessageTrait.php',
    'Ivory\\HttpAdapter\\Message\\Request' => $vendorDir . '/egeloen/http-adapter/src/Message/Request.php',
    'Ivory\\HttpAdapter\\Message\\RequestInterface' => $vendorDir . '/egeloen/http-adapter/src/Message/RequestInterface.php',
    'Ivory\\HttpAdapter\\Message\\Response' => $vendorDir . '/egeloen/http-adapter/src/Message/Response.php',
    'Ivory\\HttpAdapter\\Message\\ResponseInterface' => $vendorDir . '/egeloen/http-adapter/src/Message/ResponseInterface.php',
    'Ivory\\HttpAdapter\\MockHttpAdapter' => $vendorDir . '/egeloen/http-adapter/src/MockHttpAdapter.php',
    'Ivory\\HttpAdapter\\MultiHttpAdapterException' => $vendorDir . '/egeloen/http-adapter/src/MultiHttpAdapterException.php',
    'Ivory\\HttpAdapter\\Normalizer\\BodyNormalizer' => $vendorDir . '/egeloen/http-adapter/src/Normalizer/BodyNormalizer.php',
    'Ivory\\HttpAdapter\\Normalizer\\HeadersNormalizer' => $vendorDir . '/egeloen/http-adapter/src/Normalizer/HeadersNormalizer.php',
    'Ivory\\HttpAdapter\\Parser\\CookieParser' => $vendorDir . '/egeloen/http-adapter/src/Parser/CookieParser.php',
    'Ivory\\HttpAdapter\\Parser\\HeadersParser' => $vendorDir . '/egeloen/http-adapter/src/Parser/HeadersParser.php',
    'Ivory\\HttpAdapter\\PeclHttpAdapter' => $vendorDir . '/egeloen/http-adapter/src/PeclHttpAdapter.php',
    'Ivory\\HttpAdapter\\PsrHttpAdapterDecorator' => $vendorDir . '/egeloen/http-adapter/src/PsrHttpAdapterDecorator.php',
    'Ivory\\HttpAdapter\\PsrHttpAdapterInterface' => $vendorDir . '/egeloen/http-adapter/src/PsrHttpAdapterInterface.php',
    'Ivory\\HttpAdapter\\ReactHttpAdapter' => $vendorDir . '/egeloen/http-adapter/src/ReactHttpAdapter.php',
    'Ivory\\HttpAdapter\\SocketHttpAdapter' => $vendorDir . '/egeloen/http-adapter/src/SocketHttpAdapter.php',
    'Ivory\\HttpAdapter\\StopwatchHttpAdapter' => $vendorDir . '/egeloen/http-adapter/src/StopwatchHttpAdapter.php',
    'Ivory\\HttpAdapter\\Zend1HttpAdapter' => $vendorDir . '/egeloen/http-adapter/src/Zend1HttpAdapter.php',
    'Ivory\\HttpAdapter\\Zend2HttpAdapter' => $vendorDir . '/egeloen/http-adapter/src/Zend2HttpAdapter.php',
    'Psr\\Http\\Message\\MessageInterface' => $vendorDir . '/psr/http-message/src/MessageInterface.php',
    'Psr\\Http\\Message\\RequestInterface' => $vendorDir . '/psr/http-message/src/RequestInterface.php',
    'Psr\\Http\\Message\\ResponseInterface' => $vendorDir . '/psr/http-message/src/ResponseInterface.php',
    'Psr\\Http\\Message\\ServerRequestInterface' => $vendorDir . '/psr/http-message/src/ServerRequestInterface.php',
    'Psr\\Http\\Message\\StreamInterface' => $vendorDir . '/psr/http-message/src/StreamInterface.php',
    'Psr\\Http\\Message\\UploadedFileInterface' => $vendorDir . '/psr/http-message/src/UploadedFileInterface.php',
    'Psr\\Http\\Message\\UriInterface' => $vendorDir . '/psr/http-message/src/UriInterface.php',
    'RetailStore' => $baseDir . '/RetailStore.php',
    'Zend\\Diactoros\\AbstractSerializer' => $vendorDir . '/zendframework/zend-diactoros/src/AbstractSerializer.php',
    'Zend\\Diactoros\\CallbackStream' => $vendorDir . '/zendframework/zend-diactoros/src/CallbackStream.php',
    'Zend\\Diactoros\\Exception\\DeprecatedMethodException' => $vendorDir . '/zendframework/zend-diactoros/src/Exception/DeprecatedMethodException.php',
    'Zend\\Diactoros\\Exception\\ExceptionInterface' => $vendorDir . '/zendframework/zend-diactoros/src/Exception/ExceptionInterface.php',
    'Zend\\Diactoros\\HeaderSecurity' => $vendorDir . '/zendframework/zend-diactoros/src/HeaderSecurity.php',
    'Zend\\Diactoros\\MessageTrait' => $vendorDir . '/zendframework/zend-diactoros/src/MessageTrait.php',
    'Zend\\Diactoros\\PhpInputStream' => $vendorDir . '/zendframework/zend-diactoros/src/PhpInputStream.php',
    'Zend\\Diactoros\\RelativeStream' => $vendorDir . '/zendframework/zend-diactoros/src/RelativeStream.php',
    'Zend\\Diactoros\\Request' => $vendorDir . '/zendframework/zend-diactoros/src/Request.php',
    'Zend\\Diactoros\\RequestTrait' => $vendorDir . '/zendframework/zend-diactoros/src/RequestTrait.php',
    'Zend\\Diactoros\\Request\\Serializer' => $vendorDir . '/zendframework/zend-diactoros/src/Request/Serializer.php',
    'Zend\\Diactoros\\Response' => $vendorDir . '/zendframework/zend-diactoros/src/Response.php',
    'Zend\\Diactoros\\Response\\EmitterInterface' => $vendorDir . '/zendframework/zend-diactoros/src/Response/EmitterInterface.php',
    'Zend\\Diactoros\\Response\\EmptyResponse' => $vendorDir . '/zendframework/zend-diactoros/src/Response/EmptyResponse.php',
    'Zend\\Diactoros\\Response\\HtmlResponse' => $vendorDir . '/zendframework/zend-diactoros/src/Response/HtmlResponse.php',
    'Zend\\Diactoros\\Response\\InjectContentTypeTrait' => $vendorDir . '/zendframework/zend-diactoros/src/Response/InjectContentTypeTrait.php',
    'Zend\\Diactoros\\Response\\JsonResponse' => $vendorDir . '/zendframework/zend-diactoros/src/Response/JsonResponse.php',
    'Zend\\Diactoros\\Response\\RedirectResponse' => $vendorDir . '/zendframework/zend-diactoros/src/Response/RedirectResponse.php',
    'Zend\\Diactoros\\Response\\SapiEmitter' => $vendorDir . '/zendframework/zend-diactoros/src/Response/SapiEmitter.php',
    'Zend\\Diactoros\\Response\\SapiEmitterTrait' => $vendorDir . '/zendframework/zend-diactoros/src/Response/SapiEmitterTrait.php',
    'Zend\\Diactoros\\Response\\SapiStreamEmitter' => $vendorDir . '/zendframework/zend-diactoros/src/Response/SapiStreamEmitter.php',
    'Zend\\Diactoros\\Response\\Serializer' => $vendorDir . '/zendframework/zend-diactoros/src/Response/Serializer.php',
    'Zend\\Diactoros\\Response\\TextResponse' => $vendorDir . '/zendframework/zend-diactoros/src/Response/TextResponse.php',
    'Zend\\Diactoros\\Server' => $vendorDir . '/zendframework/zend-diactoros/src/Server.php',
    'Zend\\Diactoros\\ServerRequest' => $vendorDir . '/zendframework/zend-diactoros/src/ServerRequest.php',
    'Zend\\Diactoros\\ServerRequestFactory' => $vendorDir . '/zendframework/zend-diactoros/src/ServerRequestFactory.php',
    'Zend\\Diactoros\\Stream' => $vendorDir . '/zendframework/zend-diactoros/src/Stream.php',
    'Zend\\Diactoros\\UploadedFile' => $vendorDir . '/zendframework/zend-diactoros/src/UploadedFile.php',
    'Zend\\Diactoros\\Uri' => $vendorDir . '/zendframework/zend-diactoros/src/Uri.php',
    'igorw\\GetInTest' => $vendorDir . '/igorw/get-in/tests/GetInTest.php',
);
