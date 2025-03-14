import {computePosition as computePositionCore} from '@floating-ui/core';

import {platform} from './platform';
import type {
  ComputePositionConfig,
  FloatingElement,
  ReferenceElement,
} from './types';

/**
 * TODO: move this method declaration to its own file, and import it from there
 * The index file should only export the public API.
 *
 * Computes the `x` and `y` coordinates that will place the floating element
 * next to a reference element when it is given a certain CSS positioning
 * strategy.
 */
export const computePosition = (
  reference: ReferenceElement,
  floating: FloatingElement,
  options?: Partial<ComputePositionConfig>,
) => {
  // This caches the expensive `getClippingElementAncestors` function so that
  // multiple lifecycle resets re-use the same result. It only lives for a
  // single call. If other functions become expensive, we can add them as well.
  const cache = new Map<ReferenceElement, Array<Element>>();
  const mergedOptions = {platform, ...options};
  const platformWithCache = {...mergedOptions.platform, _c: cache};
  return computePositionCore(reference, floating, {
    ...mergedOptions,
    platform: platformWithCache,
  });
};

export {autoUpdate} from './autoUpdate';
export {
  arrow,
  autoPlacement,
  detectOverflow,
  flip,
  hide,
  inline,
  limitShift,
  offset,
  shift,
  size,
} from './middleware';
export {platform} from './platform';
export type {
  ArrowOptions,
  AutoPlacementOptions,
  AutoUpdateOptions,
  Boundary,
  ComputePositionConfig,
  Derivable,
  DetectOverflowOptions,
  Elements,
  FlipOptions,
  FloatingElement,
  HideOptions,
  Middleware,
  MiddlewareArguments,
  MiddlewareState,
  NodeScroll,
  Platform,
  ReferenceElement,
  ShiftOptions,
  SizeOptions,
  VirtualElement,
} from './types';
export type {
  AlignedPlacement,
  Alignment,
  Axis,
  ClientRectObject,
  ComputePositionReturn,
  Coords,
  Dimensions,
  ElementContext,
  ElementRects,
  InlineOptions,
  Length,
  MiddlewareData,
  MiddlewareReturn,
  OffsetOptions,
  Padding,
  Placement,
  Rect,
  RootBoundary,
  Side,
  SideObject,
  Strategy,
} from '@floating-ui/core';
export {getOverflowAncestors} from '@floating-ui/utils/dom';
