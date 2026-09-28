import { usePage } from '@inertiajs/react'
import Shell from '@/Components/Shell'

interface Props {
  assets: { logo: string; banner: string; banner2: string }
  [key: string]: any
}

export default function OurStory() {
  const { assets } = usePage<Props>().props

  return (
    <Shell>
      <section className="space-y-10 lg:space-y-14">
        {/* Banner */}
        <div className="relative overflow-hidden rounded-3xl shadow-xl ring-1 ring-green/10">
          <img
            src={assets.banner}
            alt="Our Story — Sanjumanju family heritage hero banner"
            className="w-full max-h-[340px] sm:max-h-[440px] lg:max-h-[500px] object-cover"
            sizes="(max-width: 412px) 100vw, (max-width: 1024px) 92vw, 1200px"
            loading="eager"
            decoding="async"
          />
          <div className="absolute inset-0 bg-gradient-to-t from-green/85 via-green/30 to-transparent flex items-end p-6 sm:p-10">
            <div className="text-ivory space-y-2 max-w-2xl">
              <span className="inline-block px-3 py-1 bg-turmeric text-green font-semibold text-xs tracking-wider uppercase rounded-full">
                Three Generations of Craft
              </span>
              <h2 className="font-serif text-2xl sm:text-4xl font-bold leading-tight">
                From a Family Kitchen to India’s Favorite Pickle House
              </h2>
            </div>
          </div>
        </div>

        {/* Narrative */}
        <div className="max-w-3xl mx-auto space-y-6 text-center">
          <h1 className="font-serif text-3xl sm:text-4xl md:text-5xl font-bold text-green">
            Our Heritage Story
          </h1>
          <p className="text-base sm:text-lg text-green/80 leading-relaxed">
            Sanjumanju was born in our family kitchen. What began as jars of achar shared with
            neighbours and wedding guests has grown into a small-batch pickle house loved across
            India — still run by the same Maheshwari family.
          </p>
          <p className="text-base sm:text-lg text-green/70 leading-relaxed">
            We remain uncompromising: hand-sourced produce, traditional stone grinding, sun
            maturation, cold-pressed mustard oil, and zero artificial additives or chemicals.
          </p>
        </div>

        {/* Story Grid Cards */}
        <div className="grid sm:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8">
          <div className="bg-white/70 backdrop-blur rounded-3xl p-6 border border-turmeric/20 shadow-md">
            <h3 className="font-serif text-xl font-bold text-green mb-2">1968 - The Beginning</h3>
            <p className="text-sm text-green/75 leading-relaxed">
              Grandmother Maheshwari started perfecting small-batch raw mango and stuffed chilli pickles using ceramic barnis on the sunny courtyard terrace.
            </p>
          </div>
          <div className="bg-white/70 backdrop-blur rounded-3xl p-6 border border-turmeric/20 shadow-md">
            <h3 className="font-serif text-xl font-bold text-green mb-2">The Name &apos;Sanjumanju&apos;</h3>
            <p className="text-sm text-green/75 leading-relaxed">
              Named after sisters Sanju and Manju, who carried forward their mother&apos;s secret spice ratios and commitment to uncompromising purity.
            </p>
          </div>
          <div className="bg-white/70 backdrop-blur rounded-3xl p-6 border border-turmeric/20 shadow-md">
            <h3 className="font-serif text-xl font-bold text-green mb-2">Today &amp; Tomorrow</h3>
            <p className="text-sm text-green/75 leading-relaxed">
              We continue to prepare every single jar by hand in small seasonal batches, delivering authentic home-kitchen taste directly to your dining table.
            </p>
          </div>
        </div>

        {/* Secondary Banner */}
        <div className="overflow-hidden rounded-2xl shadow-lg ring-1 ring-green/5">
          <img
            src={assets.banner2}
            alt="Our Story — Sanjumanju family kitchen heritage featured banner"
            className="w-full max-h-[200px] sm:max-h-[260px] object-cover"
            sizes="(max-width: 412px) 100vw, 960px"
            loading="lazy"
            decoding="async"
          />
        </div>
      </section>
    </Shell>
  )
}

