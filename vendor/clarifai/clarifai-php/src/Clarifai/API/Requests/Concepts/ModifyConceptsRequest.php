<?php

namespace Clarifai\API\Requests\Concepts;

use Clarifai\API\ClarifaiHttpClientInterface;
use Clarifai\API\CustomV2Client;
use Clarifai\API\RequestMethod;
use Clarifai\API\Requests\ClarifaiRequest;
use Clarifai\DTOs\Predictions\Concept;
use Clarifai\Internal\_MultiConceptResponse;
use Clarifai\Internal\_PatchConceptsRequest;

class ModifyConceptsRequest extends ClarifaiRequest
{
    private $concepts;

    /**
     * Ctor.
     * @param ClarifaiHttpClientInterface $httpClient The Clarifai HTTP client.
     * @param Concept[]|Concept $concepts the concepts to modify
     */
    public function __construct(ClarifaiHttpClientInterface $httpClient, $concepts)
    {
        parent::__construct($httpClient);
        $this->concepts = is_array($concepts) ? $concepts : [$concepts];
    }

    protected function requestMethod()
    {
        return RequestMethod::PATCH;
    }

    protected function url()
    {
        return '/v2/concepts';
    }

    protected function httpRequestBody(CustomV2Client $grpcClient)
    {
        $concepts = [];
        foreach ($this->concepts as $concept) {
            array_push($concepts, $concept->serialize());
        }
        $response = $grpcClient->PatchConcepts((new _PatchConceptsRequest())
            ->setAction('overwrite')
            ->setConcepts($concepts));
        return $response;
    }

    /**
     * @param _MultiConceptResponse $response
     * @return Concept[]
     */
    protected function unmarshaller($response)
    {
        $concepts = [];
        foreach ($response->getConcepts() as $concept) {
            array_push($concepts, Concept::deserialize($concept));
        }
        return $concepts;
    }
}
