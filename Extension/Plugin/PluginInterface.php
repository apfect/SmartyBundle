<?php
/*
 * This file is part of the NoiseLabs-SmartyBundle package.
 *
 * Copyright (c) 2011-2019 Vítor Brandão <vitor@noiselabs.io>
 *
 * NoiseLabs-SmartyBundle is free software; you can redistribute it
 * and/or modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation; either
 * version 3 of the License, or (at your option) any later version.
 *
 * NoiseLabs-SmartyBundle is distributed in the hope that it will be
 * useful, but WITHOUT ANY WARRANTY; without even the implied warranty
 * of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with NoiseLabs-SmartyBundle; if not, see
 * <http://www.gnu.org/licenses/>.
 */
declare(strict_types=1);

namespace NoiseLabs\Bundle\SmartyBundle\Extension\Plugin;

/**
 * Plugin interface.
 *
 * @author Vítor Brandão <vitor@noiselabs.io>
 */
interface PluginInterface
{
    const TYPE_BLOCK = 'block';
    const TYPE_COMPILER = 'compiler';
    const TYPE_FUNCTION = 'function';
    const TYPE_INSERT = 'insert';
    const TYPE_MODIFIER = 'modifier';
    const TYPE_OUTPUTFILTER = 'outputfilter';
    const TYPE_POSTFILTER = 'postfilter';
    const TYPE_PREFILTER = 'prefilter';
    const TYPE_RESOURCE = 'resource';

    public function getType();

    /**
     * Get the plugin name.
     */
    public function getName();

    /**
     * Return the plugin callback.
     */
    public function getCallback();
}
