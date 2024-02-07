<?php

namespace Orchestra\Testbench\Concerns;

use Closure;
use Orchestra\Testbench\Features\TestingFeature;

/**
 * @deprecated
 */
trait HandlesTestingFeature
{
    /**
     * Resolve available testing features for Testbench.
     *
     * @param  (\Closure():(void))|null  $default
     * @param  (\Closure():(void))|null  $annotation
     * @param  (\Closure():(mixed))|null  $attribute
     * @return \Illuminate\Support\Fluent
     */
    protected function resolveTestbenchTestingFeature(
        ?Closure $default = null,
        ?Closure $annotation = null,
        ?Closure $attribute = null
    ) {
        return TestingFeature::run(
            $this,
            $default,
            $annotation,
            $attribute,
        );
    }
}
