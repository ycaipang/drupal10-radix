import type {Placement} from '@floating-ui/core';
import type {FlipOptions} from '@floating-ui/core';
import {flip, shift, useFloating} from '@floating-ui/react-dom';
import {useLayoutEffect, useState} from 'react';

import {allPlacements} from '../utils/allPlacements';
import {Controls} from '../utils/Controls';
import {useScroll} from '../utils/useScroll';

const BOOLS = [true, false];
const FALLBACK_STRATEGIES: Array<FlipOptions['fallbackStrategy']> = [
  'bestFit',
  'initialPlacement',
];

export function Flip() {
  const [placement, setPlacement] = useState<Placement>('bottom');
  const [mainAxis, setMainAxis] = useState(true);
  const [crossAxis, setCrossAxis] = useState(true);
  const [fallbackPlacements, setFallbackPlacements] = useState<Placement[]>();
  const [fallbackStrategy, setFallbackStrategy] =
    useState<FlipOptions['fallbackStrategy']>('bestFit');
  const [flipAlignment, setFlipAlignment] = useState(true);
  const [addShift, setAddShift] = useState(false);
  const {x, y, strategy, update, refs} = useFloating({
    placement,
    middleware: [
      flip({
        mainAxis,
        crossAxis,
        fallbackPlacements: addShift ? ['bottom'] : fallbackPlacements,
        fallbackStrategy,
        flipAlignment,
      }),
      addShift && shift(),
    ],
  });

  useLayoutEffect(update, [
    update,
    mainAxis,
    crossAxis,
    fallbackPlacements?.length,
    fallbackStrategy,
  ]);

  const {scrollRef, indicator} = useScroll({refs, update});

  return (
    <>
      <h1>Flip</h1>
      <p></p>
      <div className="container">
        <div
          className="scroll"
          data-x
          style={{position: 'relative'}}
          ref={scrollRef}
        >
          {indicator}
          <div ref={refs.setReference} className="reference">
            Reference
          </div>
          <div
            ref={refs.setFloating}
            className="floating"
            style={{
              position: strategy,
              top: y ?? 0,
              left: x ?? 0,
              ...(addShift && {
                width: 400,
              }),
            }}
          >
            Floating
          </div>
        </div>
      </div>

      <h2>placement</h2>
      <Controls>
        {allPlacements.map((localPlacement) => (
          <button
            key={localPlacement}
            data-testid={`placement-${localPlacement}`}
            onClick={() => setPlacement(localPlacement)}
            style={{
              backgroundColor: localPlacement === placement ? 'black' : '',
            }}
          >
            {localPlacement}
          </button>
        ))}
      </Controls>

      <h2>mainAxis</h2>
      <Controls>
        {BOOLS.map((bool) => (
          <button
            key={String(bool)}
            data-testid={`mainAxis-${bool}`}
            onClick={() => setMainAxis(bool)}
            style={{backgroundColor: mainAxis === bool ? 'black' : ''}}
          >
            {String(bool)}
          </button>
        ))}
      </Controls>

      <h2>crossAxis</h2>
      <Controls>
        {BOOLS.map((bool) => (
          <button
            key={String(bool)}
            data-testid={`crossAxis-${bool}`}
            onClick={() => setCrossAxis(bool)}
            style={{backgroundColor: crossAxis === bool ? 'black' : ''}}
          >
            {String(bool)}
          </button>
        ))}
      </Controls>

      <h2>fallbackPlacements</h2>
      <Controls>
        {[['undefined'], [], allPlacements].map((localFallbackPlacements) => (
          <button
            key={localFallbackPlacements.length}
            data-testid={`fallbackPlacements-${
              localFallbackPlacements[0] === 'undefined'
                ? 'undefined'
                : localFallbackPlacements[0] == null
                  ? '[]'
                  : localFallbackPlacements.length === 12
                    ? 'all'
                    : ''
            }`}
            onClick={() =>
              setFallbackPlacements(
                // @ts-ignore
                localFallbackPlacements[0] === 'undefined'
                  ? undefined
                  : localFallbackPlacements,
              )
            }
            style={{
              backgroundColor:
                localFallbackPlacements[0] === 'undefined' &&
                fallbackPlacements === undefined
                  ? 'black'
                  : localFallbackPlacements?.length ===
                      fallbackPlacements?.length
                    ? 'black'
                    : '',
            }}
          >
            {localFallbackPlacements[0] === 'undefined'
              ? 'undefined'
              : `[${localFallbackPlacements?.join(', ')}]`}
          </button>
        ))}
      </Controls>

      <h2>fallbackStrategy</h2>
      <Controls>
        {FALLBACK_STRATEGIES.map((localFallbackStrategy) => (
          <button
            key={localFallbackStrategy}
            data-testid={`fallbackStrategy-${localFallbackStrategy}`}
            onClick={() => setFallbackStrategy(localFallbackStrategy)}
            style={{
              backgroundColor:
                localFallbackStrategy === fallbackStrategy ? 'black' : '',
            }}
          >
            {localFallbackStrategy}
          </button>
        ))}
      </Controls>

      <h2>flipAlignment</h2>
      <Controls>
        {BOOLS.map((bool) => (
          <button
            key={String(bool)}
            data-testid={`flipAlignment-${bool}`}
            onClick={() => setFlipAlignment(bool)}
            style={{
              backgroundColor: bool === flipAlignment ? 'black' : '',
            }}
          >
            {String(bool)}
          </button>
        ))}
      </Controls>

      <h2>Add shift</h2>
      <Controls>
        {BOOLS.map((bool) => (
          <button
            key={String(bool)}
            data-testid={`shift-${bool}`}
            onClick={() => setAddShift(bool)}
            style={{
              backgroundColor: bool === addShift ? 'black' : '',
            }}
          >
            {String(bool)}
          </button>
        ))}
      </Controls>
    </>
  );
}
