<?php declare(strict_types=1);

namespace Salient\Http\Exception;

use Salient\Contract\Http\Exception\StreamException as StreamExceptionInterface;

/**
 * @internal
 */
class StreamException extends HttpException implements StreamExceptionInterface {}
