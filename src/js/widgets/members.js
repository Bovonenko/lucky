import { html } from "lit-html";

export default () => {
	return html`
		<section class="members" id="members">
			<div class="members__container">
				<swiper-container init="false">
					<swiper-slide lazy="true">
						<img
							class="members__img"
							loading="lazy"
							src="./img/members/rostyslav.jpg"
							alt="club player member Rostyslav Bovonenko portrait"
						/>
						<p class="members__name">Rostyslav Bovonenko</p>
						<p class="members__position">Club Player</p>
					</swiper-slide>
					<swiper-slide lazy="true">
						<img
							class="members__img"
							loading="lazy"
							src="./img/members/kadek.jpg"
							alt="club player member Rostyslav Bovonenko portrait"
						/>
						<p class="members__name">Rostyslav Bovonenko</p>
						<p class="members__position">Club Player</p>
					</swiper-slide>
					<swiper-slide lazy="true">
						<img
							class="members__img"
							loading="lazy"
							src="./img/members/osip.jpg"
							alt="club player member Rostyslav Bovonenko portrait"
						/>
						<p class="members__name">Rostyslav Bovonenko</p>
						<p class="members__position">Club Player</p>
					</swiper-slide>
					<swiper-slide lazy="true">
						<img
							class="members__img"
							loading="lazy"
							src="./img/members/pavel.jpg"
							alt="club player member Rostyslav Bovonenko portrait"
						/>
						<p class="members__name">Rostyslav Bovonenko</p>
						<p class="members__position">Club Player</p>
					</swiper-slide>
					<swiper-slide lazy="true">
						<img
							class="members__img"
							loading="lazy"
							src="./img/members/qu.jpg"
							alt="club player member Rostyslav Bovonenko portrait"
						/>
						<p class="members__name">Rostyslav Bovonenko</p>
						<p class="members__position">Club Player</p>
					</swiper-slide>
					<swiper-slide lazy="true">
						<img
							class="members__img"
							loading="lazy"
							src="./img/members/tomas.jpg"
							alt="club player member Rostyslav Bovonenko portrait"
						/>
						<p class="members__name">Rostyslav Bovonenko</p>
						<p class="members__position">Club Player</p>
					</swiper-slide>
				</swiper-container>
			</div>
		</section>
	`;
};
